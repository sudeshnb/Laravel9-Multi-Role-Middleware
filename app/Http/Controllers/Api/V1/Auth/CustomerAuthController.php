<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Laravel\Passport\HasApiTokens;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
            // return [
            //     'code' => 0,
            //     'data' => "no valid data",
            //     'message' => $validator->errors()->first()
            // ];
        }
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        try {
            if (auth()->attempt($data)) {

                //auth()->user() is coming from laravel auth:api middleware
                $token = auth()->user()->createToken('RestaurantCustomerAuth')->accessToken;
                if (!auth()->user()->status) {
                    $errors = [];
                    array_push($errors, ['code' => 'auth-003', 'message' => trans('messages.your_account_is_blocked')]);
                    return response()->json(['errors' => $errors], 403);
                }
                DB::table('users')
                    ->select('email', 'name', 'phone', 'password', 'remember_token', 'order_count', 'status')
                    ->where('id', '=', auth()->user()->id)
                    ->update(["remember_token" => $token]);

                $user_results = DB::table('users')
                    ->select('email', 'name', 'phone', 'password', 'remember_token', 'order_count', 'status')
                    ->where('id', '=', auth()->user()->id)
                    ->first();
                return response()->json(['code' => 200, 'data' => $user_results, 'message' => 'Login succeeded!.'], 200);
            } else {
                $errors = [];
                array_push($errors, ['code' => 0, 'message' => 'Unauthorized.']);
                return response()->json(['errors' => $errors], 401);
            }
        } catch (Exception $e) {
            $errors = [];
            array_push($errors, ['code' => 0, 'message' => (string) $e]);
            return response()->json(['errors' => $errors], 401);
        }
    }

    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     //'l_name' => 'required',
        //     'email' => 'required|unique:users',
        //     // 'phone' => 'required|unique:users',
        //     'password' => 'required|min:6',
        // ], [
        //     'name.required' => 'The first name field is required.',
        //     // 'phone.required' => 'The  phone field is required.',
        // ]);
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            // return response()->json(['errors' => "Failed Validation"], 403);
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 0,
                'order_count' => 0,
                'phone' => '',
                'password' => bcrypt($request->password),
            ]);

            $token = $user->createToken('RestaurantCustomerAuth')->accessToken;
            DB::table('users')
                ->select('email', 'name', 'password', 'remember_token')
                ->where('id', '=', $user->id)
                ->update(["remember_token" => $token]);

            $user_results = DB::table('users')
                ->select('email', 'name', 'phone', 'password', 'remember_token', 'order_count', 'status')
                ->where('id', '=', $user->id)
                ->first();
            return response()->json(['code' => 200, 'data' => $user_results, 'message' => 'Login succeeded!.'], 200);
            // return response()->json(['token' => $token, 'is_phone_verified' => 0, 'phone_verify_end_url' => "api/v1/auth/verify-phone"], 200);
        } catch (Exception $e) {
            $errors = [];
            array_push($errors, ['code' => 0, 'message' =>  $e]);
            return response()->json(['errors' => $errors], 401);
        }
    }
}

<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Closure;
use Illuminate\Support\Carbon;

class CheckUser
{

    public function handle($request, Closure $next)
    {
        $Authorization = $request->header("Authorization");
        if (empty($Authorization)) {
            return response(
                [
                    'code' => 401,
                    'message' => 'authentication failed'
                ],
                401
            );
        }
        //  trim - remove white spaces
        //  ltrim - remove left

        $access_token = trim(ltrim($Authorization, 'Bearer'));
        $user_results = DB::table('users')
            ->select('id', 'avatar', 'type', 'name', 'access_token', 'token', 'expire_date')
            ->where('access_token', $access_token)
            ->first();
        // 
        if (empty($user_results)) {
            return response(
                [
                    'code' => 401,
                    'message' => 'user does not exist'
                ],
                401
            );
        }
        // Get the expire_date
        $expire_date = $user_results->expire_date;
        if (empty($expire_date)) {
            return response(
                [
                    'code' => 401,
                    'message' => 'you must log in again'
                ],
                401
            );
        }
        // if (empty($expire_date < Carbon::now())) {
        if ($expire_date < Carbon::now()) {

            return response(
                [
                    'code' => 401,
                    'message' => 'your token has expired.'
                ],
                401
            );
        }
        // Update Databse
        $add_time = Carbon::now()->addDays(5);
        if ($expire_date < $add_time) {
            $add_expire_date = Carbon::now()->addDays(30);
            DB::table('users')
                ->where('access_token', $access_token)
                ->update(['expire_date' => $add_expire_date]);
        }
        // 
        $request->user_id = $user_results->id;
        $request->user_type = $user_results->type;
        $request->user_name = $user_results->name;
        $request->user_avatar = $user_results->avatar;
        $request->user_token = $user_results->token;



        // 
        return $next($request);
    }
}

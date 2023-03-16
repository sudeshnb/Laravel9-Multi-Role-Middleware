<?php

namespace App\Http\Controllers\Api\V1;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class ProductController extends Controller
{

    public function get_popular_products(Request $request)
    {
        try {
            $list = Food::where('type_id', 2)->take(10)->orderBy('created_at', 'DESC')->get();

            foreach ($list as $item) {
                $item['description'] = strip_tags($item['description']);
                $item['description'] = $Content = preg_replace("/&#?[a-z0-9]+;/i", " ", $item['description']);
                // unset($item['selected_people']);
                // unset($item['people']);
            }

            $data =  [
                'total_size' => $list->count(),
                'type_id' => 2,
                'offset' => 0,
                'products' => $list
            ];
            return response()->json(['code' => 200, 'data' => $data, 'message' => 'Products were found successfully!.'], 200);
            // return response()->json($data, 200);
        } catch (Exception $e) {
            $errors = [];
            array_push($errors, ['code' => 0, 'message' => (string) $e]);
            return response()->json(['errors' => $errors], 401);
        }
    }
    public function get_recommended_products(Request $request)
    {
        try {
            $list = Food::where('type_id', 3)->take(10)->orderBy('created_at', 'DESC')->get();

            foreach ($list as $item) {
                $item['description'] = strip_tags($item['description']);
                $item['description'] = $Content = preg_replace("/&#?[a-z0-9]+;/i", " ", $item['description']);
                unset($item['selected_people']);
                unset($item['people']);
            }

            $data =  [
                'total_size' => $list->count(),
                'type_id' => 3,
                'offset' => 0,
                'products' => $list
            ];
            return response()->json(['code' => 200, 'data' => $data, 'message' => 'Products were found successfully!.'], 200);
        } catch (Exception $e) {
            $errors = [];
            array_push($errors, ['code' => 0, 'message' => (string) $e]);
            return response()->json(['errors' => $errors], 401);
        }
        // return response()->json($data, 200);
    }


    public function get_products(Request $request)
    {
        try {
            $list = Food::take()->orderBy('created_at', 'DESC')->get();

            foreach ($list as $item) {
                $item['description'] = strip_tags($item['description']);
                $item['description'] = $Content = preg_replace("/&#?[a-z0-9]+;/i", " ", $item['description']);
            }

            $data =  [
                'total_size' => $list->count(),
                'type_id' => 5,
                'offset' => 0,
                'products' => $list
            ];
            // return response()->json($data, 200);
            return response()->json(['code' => 200, 'data' => $data, 'message' => 'Products were found successfully!.'], 200);
            // return json_decode($list);
        } catch (Exception $e) {
            $errors = [];
            array_push($errors, ['code' => 0, 'message' => (string) $e]);
            return response()->json(['errors' => $errors], 401);
        }
    }
}

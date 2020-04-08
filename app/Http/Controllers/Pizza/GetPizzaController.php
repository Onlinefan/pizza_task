<?php

namespace App\Http\Controllers\Pizza;

use App\Http\Controllers\Controller;
use App\Models\Pizza;

class GetPizzaController extends Controller
{
    /**
     * return list of pizzas
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList()
    {
        return response()->json([
            'data' => Pizza::select('name', 'cost', 'img_url', 'preview')->all()->all(),
            'status' => 'success'
        ]);
    }

    /**
     * return info about one pizza
     * @param Pizza $pizza
     * @return \Illuminate\Http\JsonResponse
     */
    public function detail(Pizza $pizza)
    {
        if (!$pizza) {
            return response()->json([
                'data' => [],
                'status' => 'error',
                'message' => 'Pizza doesn\'t exist!'
            ]);
        }

        return response()->json([
            'data' => $pizza->toArray(),
            'status' => 'success'
        ]);
    }
}

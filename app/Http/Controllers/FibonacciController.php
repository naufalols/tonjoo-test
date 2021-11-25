<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FibonacciController extends Controller
{
    public function index()
    {
        return view('fibonacci');
    }

    public function fibonacci(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'n1' => 'required|numeric|max:1',
            'n2' => 'required|numeric|max:10',
        ]);

        if ($validator->fails()) {
            return redirect('fibonacci')
            ->withErrors($validator)
            ->withInput();
        }

        $fibos = [];
        for ($i=0; $i <= 10; $i++) {
            if ($i == 0) {
                $fibos[$i] = 0;
            } elseif ($i == 1) {
                $fibos[$i] = 1;
            } else {
                $fibos[$i] = $fibos[$i-1] + $fibos[$i-2];
            }
        }
        return ['fibonacci' => $fibos, 'result1' => $fibos[$request->n1], 'result2' => $request->n2];
    }
}

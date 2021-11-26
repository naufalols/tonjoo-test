<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
            'n1' => 'required|numeric|max:10',
            'n2' => 'required|numeric|max:10',
        ]);

        if ($validator->fails()) {
            Session::flash('message', $validator->errors());
            Session::flash('alert-class', 'alert-danger');

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
        return redirect('fibonacci')->with(['fibonacci' => $fibos, 'result1' => $fibos[$request->n1-1], 'result2' => $fibos[$request->n2-1]]);
    }
}

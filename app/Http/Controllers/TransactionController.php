<?php

namespace App\Http\Controllers;

use App\Models\ms_category;
use App\Models\transaction;
use App\Models\transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addTransaction');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validated = $request->validate([
            'comment'               => 'required|max:200',
            'code'                  => 'required|unique:transactions,code',
            'rateEuro'              => 'required|numeric',
            'dateTransaction'       => 'required|date',
            'category'              => 'required|array',
            'category.*'            => 'required|distinct',
            'transactionName'       => 'required|array',
            'transactionName.*.*'   => 'required|max:200|distinct',
            'nominal'               => 'required|array',
            'nominal.*.*'           => 'required|max:200|distinct'
        ]);

        // DB::beginTransaction();
        $insert1 = transaction::create(array(
            'description'   => $request->comment,
            'code'          => $request->code,
            'rate_euro'     => $request->rateEuro
        ));
        $data = array();
        for ($j=0; $j < count($request->category); $j++) {
            for ($i = 0; $i < count($request->transactionName[$j]); $i++) {
                $data[] = [
                    'transaction_id'            => $insert1->id,
                    'transaction_category_id'   => $request->category[$j],
                    'name'                      => $request->transactionName[$j][$i],
                    'value_idr'                 => $request->nominal[$j][$i]
                ];
            }
        }
        dd($data);
        transaction_detail::create($data);
        // DB::commit();
        


        return redirect('addtransaction')->with('message', 'Your answers successfully submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}

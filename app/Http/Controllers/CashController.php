<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use Illuminate\Http\Request;
use DataTables;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cash.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cash.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check the condition before saving
        $sum_cash_in = $request->num_500k * 500000 + $request->num_200k * 200000 + $request->num_100k * 100000
            + $request->num_50k * 50000 + $request->num_20k * 20000 + $request->num_10k * 10000
            + $request->num_5k * 5000 + $request->num_2k * 2000 + $request->num_1k * 1000 + $request->num_500 * 500;
        $sum_pay = $request->pay_1 + $request->pay_2 + $request->pay_3 + $request->pay_4;
        if($sum_cash_in < $sum_pay){
            $msg = 'Khách nộp thiếu: ' . number_format($sum_pay - $sum_cash_in) . ' VNĐ. Tạm dừng giao dịch!';
            Session()->flash('error', $msg);
            return back();
        }
        $cash = New Cash();
        $cash->num_500k = $request->num_500k;
        $cash->num_200k = $request->num_200k;
        $cash->num_100k = $request->num_100k;
        $cash->num_50k = $request->num_50k;
        $cash->num_20k = $request->num_20k;
        $cash->num_10k = $request->num_10k;
        $cash->num_5k = $request->num_5k;
        $cash->num_2k = $request->num_2k;
        $cash->num_1k = $request->num_1k;
        $cash->num_500 = $request->num_500;
        $cash->num_other = $request->num_other;
        $cash->pay_1 = $request->pay_1;
        $cash->pay_2 = $request->pay_2;
        $cash->pay_3 = $request->pay_3;
        $cash->pay_4 = $request->pay_4;
        $cash->save();

        if($sum_cash_in == $sum_pay) {
            Session()->flash('success', 'Khách nộp vừa đủ!');
            return back();
        } elseif($sum_cash_in > $sum_pay){
            $msg = 'Khách nộp thừa: ' . number_format($sum_cash_in - $sum_pay ) . ' VNĐ. Tạo phiếu chi!';
            Session()->flash('success', $msg);
            //return redirect()->route('pays.create')->with('pay', $sum_cash_in - $sum_pay);
            return redirect()->route('pays.create')->with('pay', ($sum_cash_in - $sum_pay));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * List all cashes for datatables
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function anyData()
    {
        $cashes = Cash::select(['id', 'customer_name', 'num_500k', 'num_200k', 'num_100k',
            'num_50k', 'num_20k', 'num_10k', 'num_5k', 'num_2k', 'num_1k', 'num_500', 'num_other', 'created_at'])
        ->orderBy('id', 'desc');

        return DataTables::of($cashes)
            ->addColumn('created_at', function ($cashes) {
                return $cashes->created_at->format('Y-m-d');
            })
            ->addColumn('num_500k', function ($cashes) {
                return $cashes->num_500k;
            })
            ->addColumn('num_200k', function ($cashes) {
                return $cashes->num_200k;
            })
            ->addColumn('num_100k', function ($cashes) {
                return $cashes->num_100k;
            })
            ->addColumn('num_50k', function ($cashes) {
                return $cashes->num_50k;
            })
            ->addColumn('num_20k', function ($cashes) {
                return $cashes->num_20k;
            })
            ->addColumn('num_10k', function ($cashes) {
                return $cashes->num_10k;
            })
            ->addColumn('num_5k', function ($cashes) {
                return $cashes->num_5k;
            })
            ->addColumn('num_2k', function ($cashes) {
                return $cashes->num_2k;
            })
            ->addColumn('num_1k', function ($cashes) {
                return $cashes->num_1k;
            })
            ->addColumn('num_500', function ($cashes) {
                return $cashes->num_500;
            })
            ->addColumn('num_other', function ($cashes) {
                return $cashes->num_other;
            })
            ->addColumn('total', function ($cashes) {
                return number_format($cashes->num_500k * 500000 + $cashes->num_200k *  200000
                    + $cashes->num_100k * 100000 + $cashes->num_50k *50000
                    + $cashes->num_20k *  20000 + $cashes->num_10k *  10000
                    + $cashes->num_5k * 5000 + $cashes->num_2k * 2000
                    + $cashes->num_1k * 1000 + $cashes->num_500 * 500);
            })
            ->make(true);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use Illuminate\Http\Request;
use DataTables;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pay.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pay = New Pay();
        $pay->num_500k = $request->num_500k;
        $pay->num_200k = $request->num_200k;
        $pay->num_100k = $request->num_100k;
        $pay->num_50k = $request->num_50k;
        $pay->num_20k = $request->num_20k;
        $pay->num_10k = $request->num_10k;
        $pay->num_5k = $request->num_5k;
        $pay->num_2k = $request->num_2k;
        $pay->num_1k = $request->num_1k;
        $pay->num_500 = $request->num_500;
        $pay->save();

        Session()->flash('success', 'Tạo phiếu chi thành công!');
        return redirect()->route('cashes.create');
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
     * List all payments for datatables
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function anyData()
    {
        $pays = Pay::select(['id', 'num_500k', 'num_200k', 'num_100k',
            'num_50k', 'num_20k', 'num_10k', 'num_5k', 'num_2k', 'num_1k', 'num_500', 'created_at'])
            ->orderBy('id', 'desc');

        return DataTables::of($pays)
            ->addColumn('created_at', function ($pays) {
                return $pays->created_at->format('Y-m-d');
            })
            ->addColumn('num_500k', function ($pays) {
                return $pays->num_500k;
            })
            ->addColumn('num_200k', function ($pays) {
                return $pays->num_200k;
            })
            ->addColumn('num_100k', function ($pays) {
                return $pays->num_100k;
            })
            ->addColumn('num_50k', function ($pays) {
                return $pays->num_50k;
            })
            ->addColumn('num_20k', function ($pays) {
                return $pays->num_20k;
            })
            ->addColumn('num_10k', function ($pays) {
                return $pays->num_10k;
            })
            ->addColumn('num_5k', function ($pays) {
                return $pays->num_5k;
            })
            ->addColumn('num_2k', function ($pays) {
                return $pays->num_2k;
            })
            ->addColumn('num_1k', function ($pays) {
                return $pays->num_1k;
            })
            ->addColumn('num_500', function ($pays) {
                return $pays->num_500;
            })
            ->addColumn('total', function ($pays) {
                return number_format($pays->num_500k * 500000 + $pays->num_200k *  200000
                    + $pays->num_100k * 100000 + $pays->num_50k *50000
                    + $pays->num_20k *  20000 + $pays->num_10k *  10000
                    + $pays->num_5k * 5000 + $pays->num_2k * 2000
                    + $pays->num_1k * 1000 + $pays->num_500 * 500);
            })
            ->make(true);
    }
}

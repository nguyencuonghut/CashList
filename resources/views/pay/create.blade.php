@extends('layout.master')
@section('heading')
    <?php
    $cash = Session::get('cash');
    $pay = Session::get('pay');
    ?>
    @if(($cash - $pay) > 0)
        <h1>{{ __('Phiếu chi') }}: {{number_format($cash - $pay)}} VNĐ (Tổng phiếu thu: {{number_format($pay)}} VNĐ - Tổng nộp: {{number_format($cash)}} VNĐ)</h1>
    @else
        <h1>{{ __('Phiếu chi') }}</h1>
    @endif
@stop

@section('content')
    <div class="row  pull-right">
        <div class="col-md-12">
            <a href="{{route('pays.create')}}" class="btn btn-info">
                Tạo mới
            </a>
            <a href="{{route('pays.index')}}" class="btn btn-success">
                Tất cả
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {!! Form::open([
                    'route' => 'pays.store',
                    'files'=>true,
                    'enctype' => 'multipart/form-data'

                    ]) !!}
            @include('pay.form', ['submitButtonText' => __('Thêm mới')])

            {!! Form::close() !!}

            <hr>
            <h4>Tổng: <span class="badge" style="background-color: orangered">@{{  new Intl.NumberFormat().format(val_pay_500k * 500000 + val_pay_200k * 200000 + val_pay_100k * 100000
                + val_pay_50k * 50000 + val_pay_20k * 20000 + val_pay_10k * 10000
                + val_pay_5k * 5000 + val_pay_2k * 2000 + val_pay_1k * 1000 + val_pay_500 * 500) }}</span> VNĐ
            </h4>
        </div>
    </div>


@stop
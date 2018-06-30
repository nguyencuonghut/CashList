@extends('layout.master')
@section('heading')
    <h1>{{ __('Phiếu thu tiền mặt') }}</h1>
@stop

@section('content')
    <div class="row  pull-right">
        <div class="col-md-12">
            <a href="{{route('cashes.create')}}" class="btn btn-info">
                Tạo mới
            </a>
            <a href="{{route('cashes.index')}}" class="btn btn-success">
                Tất cả phiếu thu
            </a>
            <a href="{{route('pays.index')}}" class="btn btn-warning">
                Tất cả phiếu chi
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {!! Form::open([
                    'route' => 'cashes.store',
                    'files'=>true,
                    'enctype' => 'multipart/form-data'

                    ]) !!}
            @include('cash.form', ['submitButtonText' => __('Thêm mới')])

            {!! Form::close() !!}
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h4>Tổng nộp: <span class="badge" style="background-color: blue">@{{  new Intl.NumberFormat().format(val_500k * 500000 + val_200k * 200000 + val_100k * 100000
                    + val_50k * 50000 + val_20k * 20000 + val_10k * 10000
                    + val_5k * 5000 + val_2k * 2000 + val_1k * 1000 + val_500 * 500) }}</span> VNĐ
                    </h4>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h4>Tổng phiếu thu: <span class="badge" style="background-color: green">@{{ new Intl.NumberFormat().format(val_pay_1 * 1 + val_pay_2 * 1 + val_pay_3 * 1 + val_pay_4 * 1) }}</span> VNĐ</h4>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h4 v-if="(val_pay_1 * 1 + val_pay_2 * 1 + val_pay_3 * 1 + val_pay_4 * 1
                    - val_500k * 500000 - val_200k * 200000 - val_100k * 100000
                    - val_50k * 50000 - val_20k * 20000 - val_10k * 10000
                    - val_5k * 5000 - val_2k * 2000 - val_1k * 1000 - val_500 * 500) > 0">Còn thiếu: <span class="badge" style="background-color: red">
                    @{{  new Intl.NumberFormat().format(
                    val_pay_1 * 1 + val_pay_2 * 1 + val_pay_3 * 1 + val_pay_4 * 1
                    - val_500k * 500000 - val_200k * 200000 - val_100k * 100000
                    - val_50k * 50000 - val_20k * 20000 - val_10k * 10000
                    - val_5k * 5000 - val_2k * 2000 - val_1k * 1000 - val_500 * 500
                        ) }}</span> VNĐ
                    </h4>
                    <h4 v-else>Còn thừa: <span class="badge" style="background-color: blue">
                    @{{  new Intl.NumberFormat().format(
                    val_500k * 500000 + val_200k * 200000 + val_100k * 100000
                    + val_50k * 50000 + val_20k * 20000 + val_10k * 10000
                    + val_5k * 5000 + val_2k * 2000 + val_1k * 1000 + val_500 * 500
                    - val_pay_1 * 1 - val_pay_2 * 1 - val_pay_3 * 1 - val_pay_4 * 1
                        ) }}</span> VNĐ
                    </h4>
                </div>
            </div>
        </div>
    </div>


@stop
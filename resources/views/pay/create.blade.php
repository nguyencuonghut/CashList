@extends('layout.master')
@section('heading')
    <?php
    $pay = Session::get('pay');
    ?>
    @if($pay > 0)
        <h1>{{ __('Phiếu chi tiền mặt') }} ({{number_format($pay)}} VNĐ)</h1>
    @else
        <h1>{{ __('Phiếu chi tiền mặt') }}</h1>
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
        </div>
    </div>


@stop
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
        </div>
    </div>


@stop
@extends('layout.master')
@section('heading')
    <h1>{{ __('Lỗi do khách nộp thiếu tiền') }} (Tổng phiếu thu: {{number_format($pay)}} VNĐ - Tổng nộp: {{number_format($cash)}} VNĐ)</h1>
@stop

@section('content')
    <div class="row  pull-right">
        <div class="col-md-12">
            <a href="{{route('cashes.create')}}" class="btn btn-info">
                Tạo mới phiếu thu
            </a>
        </div>
    </div>
@stop
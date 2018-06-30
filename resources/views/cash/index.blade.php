@extends('layout.master')
@section('heading')
    <h1>{{ __('Tất cả phiếu thu tiền mặt') }}</h1>
@stop

@section('content')
    <div class="row  pull-right">
        <div class="col-md-12">
            <a href="{{route('cashes.create')}}" class="btn btn-info">
                Tạo mới
            </a>
            <a href="{{route('pays.index')}}" class="btn btn-success">
                Tất cả phiếu chi
            </a>
        </div>
    </div>

    <table class="table table-hover" id="cash-table">
        <thead>
        <tr>
            <th>{{ __('Ngày tạo') }}</th>
            <th>{{ __('500k') }}</th>
            <th>{{ __('200k') }}</th>
            <th>{{ __('100k') }}</th>
            <th>{{ __('50k') }}</th>
            <th>{{ __('20k') }}</th>
            <th>{{ __('10k') }}</th>
            <th>{{ __('5k') }}</th>
            <th>{{ __('2k') }}</th>
            <th>{{ __('1k') }}</th>
            <th>{{ __('500') }}</th>
            <th>{{ __('Tổng tiền (VNĐ)') }}</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
            <th style="color: blue;"></th>
        </tr>
        </tfoot>
    </table>
@stop
@push('scripts')
    <script>
        $(function () {
            $('#cash-table').DataTable({
                processing: true,
                serverSide: false,
                "aaSorting": [],

                ajax: '{!! route('cashes.data') !!}',
                columns: [
                    {data: 'created_at', name: 'created_at'},
                    {data: 'num_500k', name: 'num_500k'},
                    {data: 'num_200k', name: 'num_200k'},
                    {data: 'num_100k', name: 'num_100k'},
                    {data: 'num_50k', name: 'num_50k'},
                    {data: 'num_20k', name: 'num_20k'},
                    {data: 'num_10k', name: 'num_10k'},
                    {data: 'num_5k', name: 'num_5k'},
                    {data: 'num_2k', name: 'num_2k'},
                    {data: 'num_1k', name: 'num_1k'},
                    {data: 'num_500', name: 'num_500'},
                    {data: 'total', name: 'total'},
                ],
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var input = document.createElement("input");
                        input.className = "form-control form-filter input-sm";
                        $(input).appendTo($(column.header()))
                            .on('keyup', function () {
                                column.search($(this).val(), false, false, true).draw();
                            });
                    });
                },
                fnFooterCallback: function (row, data, start, end, display) {
                    var api = this.api(), data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };
                    //summary for total
                    // Total over all pages
                    total_500k = api
                        .column( 1 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_500k = api
                        .column( 1, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 1 ).footer() ).html(
                        nf.format(page_total_500k) +'/'+ nf.format(total_500k)
                    );

                    //summary for total
                    // Total over all pages
                    total_200k = api
                        .column( 2 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_200k = api
                        .column( 2, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 2 ).footer() ).html(
                        nf.format(page_total_200k) +'/'+ nf.format(total_200k)
                    );


                    //summary for total
                    // Total over all pages
                    total_100k = api
                        .column( 3 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_100k = api
                        .column( 3, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 3 ).footer() ).html(
                        nf.format(page_total_100k) +'/'+ nf.format(total_100k)
                    );


                    //summary for total
                    // Total over all pages
                    total_50k = api
                        .column( 4 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_50k = api
                        .column( 4, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 4 ).footer() ).html(
                        nf.format(page_total_50k) +'/'+ nf.format(total_50k)
                    );



                    //summary for total
                    // Total over all pages
                    total_20k = api
                        .column( 5 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_20k = api
                        .column( 5, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 5 ).footer() ).html(
                        nf.format(page_total_20k) +'/'+ nf.format(total_20k)
                    );


                    //summary for total
                    // Total over all pages
                    total_10k = api
                        .column( 6 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_10k = api
                        .column( 6, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 6 ).footer() ).html(
                        nf.format(page_total_10k) +'/'+ nf.format(total_10k)
                    );


                    //summary for total
                    // Total over all pages
                    total_5k = api
                        .column( 7 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_5k = api
                        .column( 7, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 7 ).footer() ).html(
                        nf.format(page_total_5k) +'/'+ nf.format(total_5k)
                    );

                    //summary for total
                    // Total over all pages
                    total_2k = api
                        .column( 8 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_2k = api
                        .column( 8, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 8 ).footer() ).html(
                        nf.format(page_total_2k) +'/'+ nf.format(total_2k)
                    );

                    //summary for total
                    // Total over all pages
                    total_1k = api
                        .column( 9 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_1k = api
                        .column( 9, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 9 ).footer() ).html(
                        nf.format(page_total_1k) +'/'+ nf.format(total_1k)
                    );

                    //summary for total
                    // Total over all pages
                    total_500 = api
                        .column( 10 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_500 = api
                        .column( 10, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 10 ).footer() ).html(
                        nf.format(page_total_500) +'/'+ nf.format(total_500)
                    );


                    //summary for total
                    // Total over all pages
                    total_sum = api
                        .column( 11 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    page_total_sum = api
                        .column( 11, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    //~summary for total weight

                    // Update footer
                    var nf = new Intl.NumberFormat();
                    $( api.column( 11 ).footer() ).html(
                        nf.format(page_total_sum)
                    );

                },
            });
        });
    </script>
@endpush
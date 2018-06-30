<br>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Mệnh giá</th>
                        <th>Số tờ</th>
                        <th>Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>500,000</td>
                        <td>
                            {!! Form::number('num_500k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_500k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_500k * 500000) }}</td>
                    </tr>
                    <tr>
                        <td>200,000</td>
                        <td>
                            {!! Form::number('num_200k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_200k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_200k * 200000) }}</td>
                    </tr>
                    <tr>
                        <td>100,000</td>
                        <td>
                            {!! Form::number('num_100k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_100k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_100k * 100000) }}</td>
                    </tr>
                    <tr>
                        <td>50,000</td>
                        <td>
                            {!! Form::number('num_50k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_50k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_50k * 50000) }}</td>
                    </tr>
                    <tr>
                        <td>20,000</td>
                        <td>
                            {!! Form::number('num_20k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_20k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_20k * 20000) }}</td>
                    </tr>
                    <tr>
                        <td>10,000</td>
                        <td>
                            {!! Form::number('num_10k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_10k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_10k * 10000) }}</td>
                    </tr>
                    <tr>
                        <td>5,000</td>
                        <td>
                            {!! Form::number('num_5k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_5k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_5k * 5000) }}</td>
                    </tr>
                    <tr>
                        <td>2,000</td>
                        <td>
                            {!! Form::number('num_2k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_2k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_2k * 2000) }}</td>
                    </tr>
                    <tr>
                        <td>1,000</td>
                        <td>
                            {!! Form::number('num_1k', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_1k']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_1k * 1000) }}</td>
                    </tr>
                    <tr>
                        <td>500</td>
                        <td>
                            {!! Form::number('num_500', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_500']) !!}
                        </td>
                        <td>@{{  new Intl.NumberFormat().format(val_500 * 500) }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Phiếu thu</th>
                        <th>Số tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Phiếu thu 1</td>
                        <td>
                            {!! Form::number('pay_1', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_pay_1']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>Phiếu thu 2</td>
                        <td>
                            {!! Form::number('pay_2', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_pay_2']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>Phiếu thu 3</td>
                        <td>
                            {!! Form::number('pay_3', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_pay_3']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>Phiếu thu 4</td>
                        <td>
                            {!! Form::number('pay_4', null, ['class' => 'form-control', 'style' => 'width:100%', 'v-model' => 'val_pay_4']) !!}
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-body">
                <h4>Tổng nộp: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-lg" style="background-color: blue">@{{  new Intl.NumberFormat().format(val_500k * 500000 + val_200k * 200000 + val_100k * 100000
                    + val_50k * 50000 + val_20k * 20000 + val_10k * 10000
                    + val_5k * 5000 + val_2k * 2000 + val_1k * 1000 + val_500 * 500) }}</span> VNĐ
                </h4>
                <h4>Tổng phiếu thu: <span class="badge" style="background-color: green">@{{ new Intl.NumberFormat().format(val_pay_1 * 1 + val_pay_2 * 1 + val_pay_3 * 1 + val_pay_4 * 1) }}</span> VNĐ</h4>
                <h4 v-if="(val_pay_1 * 1 + val_pay_2 * 1 + val_pay_3 * 1 + val_pay_4 * 1
                    - val_500k * 500000 - val_200k * 200000 - val_100k * 100000
                    - val_50k * 50000 - val_20k * 20000 - val_10k * 10000
                    - val_5k * 5000 - val_2k * 2000 - val_1k * 1000 - val_500 * 500) > 0">Còn thiếu: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge" style="background-color: red">
                    @{{  new Intl.NumberFormat().format(
                    val_pay_1 * 1 + val_pay_2 * 1 + val_pay_3 * 1 + val_pay_4 * 1
                    - val_500k * 500000 - val_200k * 200000 - val_100k * 100000
                    - val_50k * 50000 - val_20k * 20000 - val_10k * 10000
                    - val_5k * 5000 - val_2k * 2000 - val_1k * 1000 - val_500 * 500
                        ) }}</span> VNĐ
                </h4>
                <h4 v-else>Còn thừa: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge" style="background-color: blue">
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

<br>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-info', 'id' => 'submit_btn']) !!}

<script>
    document.getElementById('submit_btn').onkeyup = function(e) {
        if (e.keyCode === 13) {
            document.getElementById('submit_btn').submit(); // your form has an id="form"
        }
        return true;
    }
</script>
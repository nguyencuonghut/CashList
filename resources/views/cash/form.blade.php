
<div class="row">
    <div class="form-inline">
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_500k', __('500k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_500k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_200k', __('200k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_200k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_100k', __('100k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_100k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeright">
            {!! Form::label('num_50k', __('50k'), ['class' => 'control-label', 'style' => 'width:100%']) !!}
            {!! Form::number('num_50k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
    </div>

    <div class="form-inline">
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_20k', __('20k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_20k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_10k', __('10k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_10k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_5k', __('5k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_5k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeright">
            {!! Form::label('num_2k', __('2k'), ['class' => 'control-label', 'style' => 'width:100%']) !!}
            {!! Form::number('num_2k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
    </div>

    <div class="form-inline">
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_1k', __('1k'), ['class' => 'control-label']) !!}
            {!! Form::number('num_1k', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('num_500', __('500'), ['class' => 'control-label']) !!}
            {!! Form::number('num_500', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeright">
            {!! Form::label('num_other', __('Khác'), ['class' => 'control-label']) !!}
            {!! Form::number('num_other', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="form-inline">
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('Khách 1', __('Khách 1'), ['class' => 'control-label']) !!}
            {!! Form::number('pay_1', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('Khách 2', __('Khách 2'), ['class' => 'control-label']) !!}
            {!! Form::number('pay_2', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('Khách 3', __('Khách 3'), ['class' => 'control-label']) !!}
            {!! Form::number('pay_3', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
        <div class="form-group col-sm-3 removeleft">
            {!! Form::label('Khách 4', __('Khách 4'), ['class' => 'control-label']) !!}
            {!! Form::number('pay_4', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
        </div>
    </div>

</div>

<br>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-info']) !!}
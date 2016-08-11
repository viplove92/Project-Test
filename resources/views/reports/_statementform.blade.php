{{--<div class="col-sm-3"></div>--}}

<div class="row">
<div class="col-sm-12">
    <div class="panel-body">
    <div class="form-group-attached">

        <div class="form-group form-group-default required">
        {!! Form::label('account_id', 'Account : ', ['class' => 'control-label']) !!}
        {!! Form::select('account_id', $account, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
        </div>

        <div class="form-group form-group-default">
        <label class="control-label">From Date</label>
        <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
        {!! Form::text('from_date', $from_date->toDateString(), [
              'class'                         => 'form-control',
              'placeholder'                   => '',
              'required',
              'id'                            => 'date',
              'data-parsley-required-message' => 'From Date is required',
              'data-parsley-trigger'          => 'change focusout'
          ]) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
        </div>

        <div class="form-group form-group-default">
        <label class="control-label">To Date</label>
        <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
        {!! Form::text('to_date', $to_date->toDateString(), [
              'class'                         => 'form-control',
              'placeholder'                   => '',
              'required',
              'id'                            => 'date',
              'data-parsley-required-message' => 'To Date is required',
              'data-parsley-trigger'          => 'change focusout'
          ]) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
        </div>

        <div class="form-group form-group-default required">
        {!! Form::label('type', 'Type : ', ['class' => 'control-label']) !!}
        {!! Form::select('type', $type, null,
                        ['id'=>'group',
                        'class' => 'full-width'
                        ]) !!}
        </div>

</div>

</div>
</div>
</div>

<br/>
<div align="center">
    <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-search"></i>  Search </button>
</div>
<br/>



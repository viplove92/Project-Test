<div class="panel-body">
<div class="form-group-attached">

        <div class="row">
        <div class="col-sm-6">
        <!-- Full Name Form Input -->
        <div class="form-group form-group-default required">
            {!! Form::label('account', 'Bank Name : ', ['class' => 'control-label']) !!}
            {!! Form::text('account', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'account',
                                'data-parsley-required-message' => 'Bank Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
        </div>

        <div class="col-sm-6">
        <!-- Company Name Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('description', 'Description : ', ['class' => 'control-label']) !!}
            {!! Form::text('description', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'id'                            => 'description',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
        </div>
        </div>

        <div class="row">

        <div class="col-sm-8">
            <div class="form-group form-group-default">
                {!! Form::label('acc_number', 'Account Number : ', ['class' => 'control-label']) !!}
                {!! Form::text('acc_number', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'id'                            => 'acc_number',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '50'
                                ]) !!}
            </div>
        </div>

@if(is_null($disable))
        <div class="col-sm-4">
                <div class="form-group form-group-default input-group required">
                    {!! Form::label('balance', 'Initial Balance : ', ['class' => 'control-label', 'id' => 'amount']) !!}
                       <input type="text" name="balance" placeholder="0.00" data-d-group="2" class="autonumeric form-control" data-a-sign="&#x20B9 ">
                       <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                </div>
        </div>
@else

@endif



</div>
</div>
</div>
<br/>

@include('includes.partials._button')
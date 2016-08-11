<div class="row">
    <div class="col-sm-6">
        <div class="form-group-attached">
            <div class="form-group form-group-default required">
                {!! Form::label('title', 'Product Name : ', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'required',
                                    'id'                            => 'title',
                                    'data-parsley-required-message' => 'Product Name is required',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
            </div>

            <div class="form-group form-group-default required">
                {!! Form::label('model_name', 'Model Name : ', ['class' => 'control-label']) !!}
                {!! Form::text('model_name', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'required',
                                    'id'                            => 'model_name',
                                    'data-parsley-required-message' => 'Model Name is required',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
            </div>

            <div class="form-group form-group-default required">
                {!! Form::label('serial_no', 'Serial Number : ', ['class' => 'control-label']) !!}
                {!! Form::text('serial_no', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'required',
                                    'id'                            => 'serial_no',
                                    'data-parsley-required-message' => 'Serial Number is required',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('desc', 'Description : ', ['for' => 'desc']) !!}
                {!! Form::textarea('desc', null,
                                ['id'   =>'desc',
                                'class' => 'full-width form-control',
                                'rows'  => '3',
                                ]) !!}
            </div>

        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group-attached">

            @if(is_null($disable))
                <div class="form-group form-group-default input-group full-width">
                    {!! Form::label('qty', 'Quantity : ', ['class' => 'control-label', 'id' => 'qty']) !!}
                    <input type="text" name="qty" placeholder="0" required="required" data-d-group="1" class="autonumeric form-control" data-a-sign="# ">
                </div>
            @else
                <div class="form-group form-group-default input-group required">
                    {!! Form::label('qty', 'Quantity : ', ['class' => 'control-label', 'id' => 'qty']) !!}
                    <input type="text" name="qty" class="form-control" placeholder="0" value="{{ $list->qty }}" required="required" data-d-group="1" data-a-sign="&#x20B9 ">
                </div>
            @endif


           @if(is_null($disable))
                <div class="form-group form-group-default input-group required">
                    {!! Form::label('price', 'Price : ', ['class' => 'control-label', 'id' => 'price']) !!}
                    <input type="text" name="price" placeholder="0.00" required="required" data-d-group="2" class="autonumeric form-control" data-a-sign="&#x20B9 ">
                    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                </div>
            @else
                <div class="form-group form-group-default input-group required">
                    {!! Form::label('price', 'Price : ', ['class' => 'control-label', 'id' => 'price']) !!}
                    <input type="text" name="price" placeholder="0.00" value="{{ $list->price }}" required="required" class="autonumeric form-control" data-d-group="2" data-a-sign="&#x20B9 ">
                    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                </div>
            @endif

        </div>
    </div>
</div>

<br>
@include('includes.partials._button')
<div class="panel-body">
<div class="form-group-attached">

        <div class="row">
        <div class="col-sm-6">

        <div class="form-group form-group-default required">
            {!! Form::label('name', 'Item Name : ', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'name',
                                'data-parsley-required-message' => 'Item Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '50'
                            ]) !!}
        </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group form-group-default">
                {!! Form::label('item_number', 'Item Number : ', ['class' => 'control-label']) !!}
                {!! Form::text('item_number', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'id'                            => 'item_number',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '50'
                                ]) !!}
            </div>
        </div>

        </div>

        <div class="row">
        <div class="col-sm-8">
            <div class="form-group form-group-default">
                {!! Form::label('description', 'Description : ', ['class' => 'control-label']) !!}
                {!! Form::text('description', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'id'                            => 'description',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '500'
                                ]) !!}
            </div>
        </div>

        <div class="col-sm-4">
            @if(is_null($disable))
                    <div class="form-group form-group-default input-group required">
                    {!! Form::label('sales_price', 'Sale Price : ', ['class' => 'control-label', 'id' => 'sales_price']) !!}
                           <input type="text" name="sales_price" placeholder="0.00" required="required" data-d-group="2" class="autonumeric form-control" data-a-sign="&#x20B9 ">
                           <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                    </div>
            @else
                    <div class="form-group form-group-default input-group required disabled">
                    {!! Form::label('sales_price', 'Sale Price : ', ['class' => 'control-label', 'id' => 'sales_price']) !!}
                    <input type="text" name="sales_price" class="form-control" placeholder="0.00" value="{{ $list->sales_price }}" disabled required="required" data-d-group="2" data-a-sign="&#x20B9 ">
                    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                    </div>
            @endif
        </div>

</div>
</div>
</div>
<br/>

@include('includes.partials._button')



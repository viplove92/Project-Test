<div class="col-sm-8">

<div class="panel-body">
<div class="form-group-attached">

        <div class="form-group form-group-default required">
            {!! Form::label('staff_name', 'Staff Name:', ['class' => 'control-label']) !!}
            {!! Form::text('staff_name', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   =>'',
                                'required',
                                'id'                            =>'inputa',
                                'data-parsley-required-messge' => 'Staff Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>

<div class="row">
<div class="col-sm-6">
        <!-- Staff Alias Name Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('alias', 'Alias :', ['class' => 'control-label']) !!}
            {!! Form::text('alias', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'id'                            => 'inputStaff Alias Name',
                                'data-parsley-required-message' => 'Staff Alias Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
</div>

<div class="col-sm-6">
        @if(is_null($disable))
                <div class="form-group form-group-default input-group required">
                {!! Form::label('mobile_no', 'Mobile : ', ['class' => 'control-label', 'id' => 'mobile_no']) !!}
                       <input type="text" name="mobile_no" required="required" class="form-control" id="phone" >
                       <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                </div>
        @else
                <div class="form-group form-group-default input-group required disabled">
                {!! Form::label('mobile_no', 'Mobile : ', ['class' => 'control-label', 'id' => 'mobile_no']) !!}
                <input type="text" name="mobile_no" class="form-control" value="{{ $list->mobile_no }}" disabled required="required" id="phone">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                </div>
        @endif
</div>
</div>

<div class="row">
<div class="col-sm-6">
        <!-- Gender ID Form Select -->
        <div class="form-group form-group-default">
            {!! Form::label('', 'Gender:') !!}
            {!! Form::select('gender_id', $gender, null, ['id'=>'group', 'class' => 'full-width']) !!}
        </div>
</div>

<div class="col-sm-6">
        <!-- Nationality Form Select -->
        <div class="form-group form-group-default">
            {!! Form::label('', 'Nationality:') !!}
            {!! Form::select('nationality_id', $nationality, null, ['id'=>'group', 'class' => 'full-width']) !!}
        </div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
        <!-- Staff Role Form Select -->
        <div class="form-group form-group-default">
            {!! Form::label('', 'Role:') !!}
            {!! Form::select('staff_role_id', $role, null, ['id'=>'group', 'class' => 'full-width']) !!}
        </div>
</div>

@if(is_null($staff))

    <div class="col-sm-6">
            <div class="form-group form-group-default">
                {!! Form::label('', 'Languages:') !!}
                {!! Form::select('language_id[]', $language, null, ['id'=>'group', 'class' => 'full-width', 'multiple' => 'multiple']) !!}
            </div>
    </div>

@else

    <div class="col-sm-6">
            <div class="form-group form-group-default">
                {!! Form::label('', 'Languages:') !!}
                {!! Form::select('language_id[]', $language, $staff->language->lists('id')->toArray(), ['id'=>'group', 'class' => 'full-width', 'multiple' => 'multiple']) !!}
            </div>
    </div>

@endif

</div>

<div class="row">
<div class="col-sm-6">
            <div class="form-group form-group-default required">
                <label class="control-label">Date</label>
                <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
                {!! Form::text('date', null, [
                'class'                         => 'form-control',
                'placeholder'                   => '',
                'required',
                'id'                            => 'date',
                'data-parsley-required-message' => 'Date is required',
                'data-parsley-trigger'          => 'change focusout'
                ]) !!}
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>
</div>

<div class="col-sm-6">
        <!-- Referred By Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('first_ref', 'Referred By:', ['class' => 'control-label']) !!}
            {!! Form::text('first_ref', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'id'                            => 'inputReffered By',
                                'data-parsley-required-message' => 'Referred By is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
</div>
</div>

        <!-- Address Form Input -->
        <div class="form-group form-group-default required">
            {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
            {!! Form::text('address', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'inputAddress',
                                'data-parsley-required-message' => 'Address is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '200'
                            ]) !!}
        </div>



</div>
</div>
</div>

<br/>
@include('includes.partials._button')
<br/>
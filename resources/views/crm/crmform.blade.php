    <div class="panel panel-default">
    <div class="panel-body">
    <div class="form-group-attached">

        <div class="row clearfix">
        <div class="col-sm-6">
        <!-- Full Name Form Input -->
        <div class="form-group form-group-default required">
            {!! Form::label('account', 'Full Name : ', ['class' => 'control-label']) !!}
            {!! Form::text('account', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'account',
                                'data-parsley-required-message' => 'Full Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
        </div>

        <div class="col-sm-6">
        <!-- Company Name Form Input -->
        <div class="form-group form-group-default required">
            {!! Form::label('company', 'Company Name : ', ['class' => 'control-label']) !!}
            {!! Form::text('company', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'company',
                                'data-parsley-required-message' => 'Company Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
        </div>
        </div>

        <div class="row clearfix">
        <div class="col-sm-6">
        <!-- Email Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('email', 'E-Mail : ', ['class' => 'control-label']) !!}
            {!! Form::text('email', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'id'                            => 'email',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
        </div>

        <div class="col-sm-6">
                <!-- Phone Form Input -->
                <div class="form-group form-group-default">
                    {!! Form::label('phone', 'Phone : ', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', null, [
                                        'class'                         => 'form-control',
                                        'placeholder'                   => '',
                                        'id'                            => 'phone',
                                        'data-parsley-trigger'          => 'change focusout',
                                        'data-parsley-minlength'        => '2',
                                        'data-parsley-maxlength'        => '32'
                                    ]) !!}
                </div>
        </div>
        </div>

        <div class="row clearfix">
          <div class="col-sm-12">
          <!-- Address Form Input -->
          <div class="form-group form-group-default ">
              {!! Form::label('address', 'Address : ', ['class' => 'control-label']) !!}
              {!! Form::text('address', null, [
                                  'class'                         => 'form-control',
                                  'placeholder'                   => '',
                                  'id'                            => 'address',
                                  'data-parsley-trigger'          => 'change focusout',
                                  'data-parsley-minlength'        => '2',
                                  'data-parsley-maxlength'        => '300'
                              ]) !!}
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
          <!-- City Form Input -->
          <div class="form-group form-group-default required">
              {!! Form::label('city', 'City:', ['class' => 'control-label']) !!}
              {!! Form::text('city', null, [
                                  'class'                         => 'form-control',
                                  'placeholder'                   => '',
                                  'required',
                                  'id'                            => 'locality',
                                  'data-parsley-required-message' => 'City is required',
                                  'data-parsley-trigger'          => 'change focusout',
                                  'data-parsley-minlength'        => '2',
                                  'data-parsley-maxlength'        => '32'
                              ]) !!}
          </div>
          </div>

          <div class="col-sm-3">
          <!-- State Form Input -->
          <div class="form-group form-group-default required">
              {!! Form::label('state', 'State:', ['class' => 'control-label']) !!}
              {!! Form::text('state', null, [
                                  'class'                         => 'form-control',
                                  'placeholder'                   => '',
                                  'required',
                                  'id'                            => 'administrative_area_level_1',
                                  'data-parsley-required-message' => 'State is required',
                                  'data-parsley-trigger'          => 'change focusout',
                                  'data-parsley-minlength'        => '2',
                                  'data-parsley-maxlength'        => '32'
                              ]) !!}
          </div>
          </div>

          <div class="col-sm-3">
          <!-- Country Form Input -->
          <div class="form-group form-group-default required">
              {!! Form::label('country', 'Country:', ['class' => 'control-label']) !!}
              {!! Form::text('country', null, [
                                  'class'                         => 'form-control',
                                  'placeholder'                   => '',
                                  'required',
                                  'id'                            => 'country',
                                  'data-parsley-required-message' => 'Country is required',
                                  'data-parsley-trigger'          => 'change focusout',
                                  'data-parsley-minlength'        => '2',
                                  'data-parsley-maxlength'        => '32'
                              ]) !!}
          </div>
          </div>

          <div class="col-sm-3">
            <!-- Zip Form Input -->
            <div class="form-group form-group-default">
                {!! Form::label('zip', 'Pincode:', ['class' => 'control-label']) !!}
                {!! Form::text('zip', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'id'                            => 'postal_code',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-type'             => 'digits',
                                    'data-parsley-minlength'        => '6',
                                    'data-parsley-maxlength'        => '6'
                                ]) !!}
            </div>
            </div>
        </div>

        <div class="row clearfix">
        <div class="col-sm-12">
        <!-- Tag Select Input -->
        @if(is_null($crm))

        <div class="col-sm-12">
            <div class="form-group form-group-default">
                {!! Form::label('tags', 'Tags : ', ['class' => 'control-label']) !!}
                {!! Form::select('tags_id[]', $tags, null, ['id'=>'group', 'class' => 'full-width', 'multiple' => 'multiple']) !!}
            </div>
        </div>

        @else

        <div class="col-sm-12">
            <div class="form-group form-group-default">
                {!! Form::label('tags', 'Tags : ', ['class' => 'control-label']) !!}
                {!! Form::select('tags_id[]', $tags, $tags->lists('id')->toArray(), ['id'=>'group', 'class' => 'full-width', 'multiple' => 'multiple']) !!}
            </div>
        </div>

        @endif

        </div>
        </div>

            <input type="hidden" class="form-control date" name="lat" id="latitude">
            <input type="hidden" class="form-control date" name="lng" id="longitude">

    <br/>

</div>
</div>
</div>

@include('includes.partials._button')


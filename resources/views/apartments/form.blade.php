<div class="form-group-attached">

        <!-- Apartment Name Form Input -->
        <div class="form-group form-group-default required">
            {!! Form::label('name', 'Apartment Name:', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'inputName',
                                'data-parsley-required-message' => 'Apartment Name is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>

        <!-- Address Line 1 Form Input -->
        <div class="form-group form-group-default required">
            {!! Form::label('address_line1', 'Address Line 1:', ['class' => 'control-label']) !!}
            {!! Form::text('address_line1', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'street_number',
                                'data-parsley-required-message' => 'Address Line 1 is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>

        <!-- Address Line 2 Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('address_line2', 'Address Line 2:', ['class' => 'control-label']) !!}
            {!! Form::text('address_line2', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'id'                            => 'route',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>

        <div class="row clearfix">
          <div class="col-sm-6">
          <!-- Address Line 3 Form Input -->
          <div class="form-group form-group-default ">
              {!! Form::label('address_line3', 'Landmark :', ['class' => 'control-label']) !!}
              {!! Form::text('address_line3', null, [
                                  'class'                         => 'form-control',
                                  'placeholder'                   => '',
                                  'id'                            => 'inputAddress Line 3',
                                  'data-parsley-trigger'          => 'change focusout',
                                  'data-parsley-minlength'        => '2',
                                  'data-parsley-maxlength'        => '32'
                              ]) !!}
          </div>
          </div>

          <div class="col-sm-6">
          <!-- Pincode Form Input -->
          <div class="form-group form-group-default required">
              {!! Form::label('pincode', 'Pincode:', ['class' => 'control-label']) !!}
              {!! Form::text('pincode', null, [
                                  'class'                         => 'form-control',
                                  'placeholder'                   => '',
                                  'required',
                                  'id'                            => 'postal_code',
                                  'data-parsley-required-message' => 'Pincode is required',
                                  'data-parsley-trigger'          => 'change focusout',
                                  'data-parsley-type'             => 'digits',
                                  'data-parsley-minlength'        => '6',
                                  'data-parsley-maxlength'        => '6'
                              ]) !!}
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
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

          <div class="col-sm-4">
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

          <div class="col-sm-4">
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
        </div>
            <input type="hidden" class="form-control date" name="lat" id="latitude" required>
            <input type="hidden" class="form-control date" name="lng" id="longitude">

        <div class="row clearfix">
        <div class="col-sm-6">
        <div class="form-group form-group-default ">
            {!! Form::label('floor', 'Total Floors:', ['class' => 'control-label']) !!}
            <input class="form-control" name="floor" type="number" v-model='floor' min="0">
        </div>
        </div>

        <div class="col-sm-6">
        <div class="form-group form-group-default required">
            {!! Form::label('block', 'Total Blocks per Floor:', ['class' => 'control-label']) !!}
            <input class="form-control" name="block" type="number" v-model='block' min="0">

        </div>
        </div>
        </div>

    <br/>

@include('includes.partials._button')

</div>
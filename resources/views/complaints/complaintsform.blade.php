    <div class="form-group form-group-default">
        {!! Form::label('', 'Type :') !!}
        {!! Form::select('type', $types, null, ['id'=>'type', 'class' => 'full-width']) !!}
    </div>

    <div class="form-group form-group-default">
        {!! Form::label('', 'Area :') !!}
        {!! Form::select('area', $area, null, ['id'=>'area', 'class' => 'full-width']) !!}
    </div>

<!-- Description Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('Description', 'Description :', ['class' => 'control-label']) !!}
    {!! Form::text('desc', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => 'Description',
                        'id'                            => 'inputDescription',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '5',
                        'data-parsley-maxlength'        => '100'
                    ]) !!}
</div>

    @include('includes.partials._button')
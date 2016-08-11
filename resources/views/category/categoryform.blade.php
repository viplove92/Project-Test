<div class="row">
    <div class="form-group-attached">
    <div class="form-group form-group-default required">
        {!! Form::label('name', 'Category Name : ', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => '',
                            'required',
                            'id'                            => 'name',
                            'data-parsley-required-message' => 'Category Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '100'
                        ]) !!}
    </div>

{{--@if(is_null($disable))--}}
    <div class="form-group form-group-default required">
        {!! Form::label('type', 'Type : ', ['class' => 'control-label']) !!}
        {!! Form::select('type', $type, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Type is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
    </div>
{{--@else--}}
    {{--<div class="form-group form-group-default required">--}}
        {{--{!! Form::label('type', 'Type : ', ['class' => 'control-label']) !!}--}}
        {{--{!! Form::select('type', $type, null,--}}
                        {{--['id'=>'group',--}}
                        {{--'class' => 'full-width',--}}
                        {{--'required',--}}
                        {{--'data-parsley-required-message' => 'Type is required',--}}
                        {{--'data-parsley-trigger'          => 'change focusout'--}}
                        {{--]) !!}--}}
    {{--</div> --}}
    {{----}}
{{--@endif--}}
</div>
</div>

<br>
@include('includes.partials._button')
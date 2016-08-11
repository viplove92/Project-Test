@if (! is_null($prof) && ! $prof->pivot->approved == 0)

    @if($profile->defaultApartment == $apartment->id)
    <a class="btn btn-white btn-xs btn bold fs-14" id="default" type="button" name="setDefaultApartment" value="1" title="{{ $apartment->name }} is Default"> <i class="fa fa-check-circle"></i></a>
    @else
    {{--{!! Form::model($apartment, ['method' => 'PATCH','route' => ['apartmentsassociate.update', $apartment->id]] ) !!}--}}
    {!! Form::model($apartment, ['method' => 'PATCH','route' => ['set-default', $apartment->id]] ) !!}
    {!! Form::submit('+', ['class' => 'btn btn-white btn-s btn-success bold fs-14', 'type' => 'button', 'title' => 'Set as Default Apartment' ]) !!}
    {!! Form::close() !!}
    @endif

@endif
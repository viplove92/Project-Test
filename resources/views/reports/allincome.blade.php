@extends('layouts.backend')

@section('title', ' | All Income')@stop

@section('content')

{!! Breadcrumbs::render('allincome') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">
<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

    <h2 align="center">All Incomes</h2>
        <br/>
        @if(count($lists))
                  @include('reports._allincomelist')
        @else
        <hr/>
                <h4 align="center">No Income Noted Yet</h4>
        <hr/>
        @endif
        <br/>

</div>
</div>
        @include('includes.partials._paginate')
</div>

@stop

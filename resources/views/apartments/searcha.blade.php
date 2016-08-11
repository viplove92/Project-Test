@extends('layouts.backend')

@section('title', ' | Search Apartment')
@stop

@section('content')

@include('includes.status')
@include('includes.errors')

{!! Breadcrumbs::render('apartments.index') !!}

    <div class="container">
    <h3>Search Apartment</h3>

  {!! Form::open(['method' => 'get', 'route' => 'apartments.index']) !!}

    		<div class="form-group">
    			<label for="location-1">Search for a location</label>
    			<input id="location-1" type="text" class="form-control typeahead" placeholder="Apartment name" data-provide="typeahead" autocomplete="off" {{ Input::get('query', '') }}>
    			 <div class="col-md-4" align="center">
                      <input type="submit" class="btn btn-success btn-cons" value="Easy Search"/><br/>
                </div>
    		</div>

 {!! Form:: close() !!}

    </div>
<hr/>

@if ($lists->count() > 0)
    <div class="col-md-12" align="center">

    <h4> Select From List ({{ $lists->count() }})</h4>

    </div>

    @foreach($lists as $list)
                  <div class="col-sm-3 b-r b-dashed b-grey">
                  <div class="gallery-item " data-width="1" data-height="1">
                    <a href="{{ route('apartments.show', $list->id) }}"><img src="images/gallery/1.jpg" alt="" class="image-responsive-height"></a>
                    <div class="overlayer bottom-left full-width">
                      <div class="overlayer-wrapper item-info ">
                        <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">

                          <div class="">
                            <p class="pull-left bold text-white fs-14 p-t-10">{{ $list->name }}</p>
                            <h5 class="pull-right semi-bold text-white font-montserrat bold">{{ $list->pincode }}</h5>
                            <div class="clearfix"></div>
                          </div>
                            <div class="m-t-10">
                              <p class="no-margin text-white fs-12">{{ $list->address_line1 }}, {{ $list->address_line2 }}, {{ $list->address_line3 }}</p>
                              <p class="no-margin text-white fs-12">{{ $list->city }},  {{ $list->state }}</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
    @endforeach


@endif

@endsection

@push('scripts')
    @include('apartments.js.typeahead')
@endpush
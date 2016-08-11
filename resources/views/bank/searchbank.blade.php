@extends('layouts.backend')

@section('title', ' | Search Bank')@stop

@section('content')

@include('includes.status')
@include('includes.errors')

{!! Breadcrumbs::render('bank.index') !!}

<div class="col-md-12">

{!! Form::open(['method' => 'get', 'route' => 'bank.index']) !!}

    <div class="form-group" align="center">
    <input name="query" type="search" id="search" placeholder="Type here..." class="form-control input-lg typeahead" {{ Input::get('query', '') }} /><br/>
    <label for="search">Bank Name or Branch Name or Address or IFSC or MICRCODE or City </label>
    </div>

                    <div class="no-border bg-transparent full-width">
                        <div class="row">
                          <div class="col-md-4">
                            {{--<h5 class="no-margin">Suggestions</h5>--}}
                            {{--<p class="hint-text m-t-5 small">suggestions will go here</p>--}}
                          </div>
                          <div class="col-md-4" align="center">
                                  <input type="submit" class="btn btn-success btn-cons" value="Easy Search"/><br/>
                          </div>
                          <div class="col-md-4" align="center">
                              {{--<a href="{{ route('apartments.create') }}" class="btn btn-primary">Create New</a>--}}
                          </div>
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
                    <a href="{{ route('bank.show', $list->id) }}"><img src="images/gallery/1.jpg" alt="" class="image-responsive-height"></a>
                    <div class="overlayer bottom-left full-width">
                      <div class="overlayer-wrapper item-info ">
                        <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">

                          <div class="">
                            <p class="pull-left bold text-white fs-14 p-t-10">{{ $list->bank }}</p>
                            <h5 class="pull-right semi-bold text-white font-montserrat">{{ $list->ifsc }}</h5>
                            <div class="clearfix"></div>
                          </div>
                            <div class="m-t-10">
                              <p class="no-margin text-white fs-12">{{ $list->address }}</p>
                              <p class="no-margin text-white fs-12">{{ $list->state }}</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
    @endforeach
@endif

@stop

@push('scripts')
    @include('bank.js.typeahead-bank')
@endpush
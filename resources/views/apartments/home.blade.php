@extends('layouts.backend')

@section('title', ' | Apartment')@stop

@section('content')

@include('includes.status')
@include('includes.errors')

@if ($apartments->count() > 0)

<div align="center"><h2>Your Apartments</h2></div>
<hr/>

@foreach($apartments as $apartment)
              <div class="col-sm-3 b-r b-dashed b-grey">
              <div class="gallery-item" data-width="1" data-height="1">
                <a href="{{ route('apartments.show', $apartment->id) }}"><img src="images/gallery/1.jpg" alt="" class="image-responsive-height"></a>
{{--                <a href="{{ route('apartments.show', $apartment->slug) }}"><img src="images/gallery/1.jpg" alt="" class="image-responsive-height"></a>--}}
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">{{ $apartment->name }}</p>
                        {{--<h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>--}}
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="images/profiles/avatar.jpg" data-src="images/profiles/avatar.jpg" data-src-retina="images/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">{{ $apartment->address_line1 }}</p>
                          <p class="no-margin text-white fs-12">{{ $apartment->address_line2 }}</p>
                        </div>
                        {{-- set default apartment --}}

                        <div class="pull-right m-t-10">

                            @if($user->profile->defaultApartment == $apartment->id)
                            <a class="btn btn-white btn-xs btn-mini bold fs-14" type="button" name="setDefaultApartment" value="1" title="{{ $apartment->name }} is Default"> <i class="fa fa-check-circle"></i></a>
                            @else
                            {!! Form::model($apartment, ['method' => 'PATCH','route' => ['set-default', $apartment->id]] ) !!}
                            {!! Form::submit('+', ['class' => 'btn btn-white btn-xs btn-mini bold fs-14', 'type' => 'button', 'title' => 'Set as Default Apartment' ]) !!}
                            {!! Form::close() !!}
                            @endif
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
@endforeach

@endif

 <div class="col-sm-3">
              <div class="gallery-item " data-width="1" data-height="1">
                <a href="{{ route('apartments.create') }}"><img src="images/gallery/plus.png" alt="" class="image-responsive-height"></a>
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <a class="pull-left bold text-white fs-14 p-t-10" href="{{ route('apartments.create') }}">Add New</a>
                        {{--<h5 class="pull-right semi-bold text-white font-montserrat bold">Add</h5>--}}
                        {{--<a class="pull-right semi-bold text-white font-montserrat bold" >Add</a>--}}
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="images/profiles/avatar.jpg" data-src="images/profiles/avatar.jpg" data-src-retina="images/profiles/avatar2x.jpg" alt="">
                        </div>

                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </div>

 <div class="col-sm-3">
              <div class="gallery-item " data-width="1" data-height="1">
                <a href="{{ route('apartments.index') }}"><img src="images/gallery/search.png" alt="" class="image-responsive-height"></a>
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <a class="pull-left bold text-white fs-14 p-t-10" href="{{ route('apartments.index') }}">Search</a>
                        {{--<h5 class="pull-right semi-bold text-white font-montserrat bold">Add</h5>--}}
                        {{--<a class="pull-right semi-bold text-white font-montserrat bold" >Add</a>--}}
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">


                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </div>

@stop

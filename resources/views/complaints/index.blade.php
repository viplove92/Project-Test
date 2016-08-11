@extends('layouts.backend')

@section('title', ' | Complaints')@stop

@section('content')

{!! Breadcrumbs::render('complaints.index') !!}

    @include('includes.errors')
    @include('includes.status')

    <div align="center"><h2>Complaints</h2></div>

    @if(count($lists))
    @foreach($lists as $list)

    <div class="col-sm-3 b-r b-dashed b-grey">

    <div class="row padding-20">
          <div class="panel panel-transparent">
              <div id="portlet-circular-minimal" class="panel panel-default">
              @if(is_null($list->photo_url))
              <a href="{{ route('complaints.show', $list->id) }}" title="Click for Details"><img src="../images/complaints/blank-complaint.png" alt="" class="image-responsive-height"></a>
              @else
              <a href="{{ route('complaints.show', $list->id) }}" title="Click for Details"><img src="../images/complaints/{{ $list->photo_url }}" alt="" class="image-responsive-height"></a>
              @endif

                <div class="panel-heading ">
                  <div class="panel-title">
                  @if($list->isClosed == 1)
                  <span class="label label-info">Closed</span>
                  @elseif($list->isClosed == 0)
                  <span class="label label-important">Open</span>
                  @endif
                  </div>
                  <div class="panel-controls">
                    <ul>
                      <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="fa fa-circle"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <h3>
                  <a href="{{ route('complaints.show', $list->id) }}"><span class="semi-bold">{{ $list->type }}</span> at {{ $list->area }}</h3> <h6> {{ $list->created_at->diffForHumans() }}</h6></a>

                <div style="width:100%">

                @if($list->isRead == 1 && $list->isProcessing == 0 && $list->isClosed == 0)
                    <div class="progress">
                        <div style="width: 45%;" data-percentage="50%" class="progress-bar progress-bar-primary" data-placement="right" data-toggle="tooltip" data-original-title="Read on {{ $list->readDate }}"></div>
                    </div>
                @elseif($list->isRead == 1 && $list->isProcessing == 1 && $list->isClosed == 0)
                    <div class="progress">
                        <div style="width: 45%;" data-percentage="75%" class="progress-bar progress-bar-success" data-placement="right" data-toggle="tooltip" data-original-title="Started Processing on {{ $list->processingDate }}"></div>
                    </div>
                @elseif($list->isRead == 1 && $list->isProcessing == 1 && $list->isClosed == 1)
                    <div class="progress">
                        <div style="width: 45%;" data-percentage="100%" class="progress-bar progress-bar-complete" data-placement="top" data-toggle="tooltip" data-original-title="Closed with Remark {{ $list->closedRemark }}"></div>
                    </div>
                @else
                    <div class="progress">
                        <div style="width: 45%;" data-percentage="25%" class="progress-bar progress-bar-danger" data-placement="bottom" data-toggle="tooltip" data-original-title="Complaint Raised"></div>
                    </div>
                @endif
                </div>

                </div>
              </div>
            </div>
        </div>
    </div>
    @endforeach
@else

    <div align="center"><h4>No Complaints yet, You seems very happy...</h4></div>

@endif

@include('includes.partials._paginate')


@stop

@foreach($staffs as $staff)

<div class="col-md-4">
<div class="panel panel-default text-white ">
    {!! HTML::image('{{ $staff->photo}}', 'avatar', array( 'width' => 128, 'height' => 128, 'class' => 'avatar' )) !!}

    <div class="panel-heading separator">
        <div class="panel-title">{{ $staff->photo}}
                                 {{ $staff->first_name}}
                                 {{ $staff->last_name}}
        </div>
    </div>
    <div class="panel-body">
       <a href="{{ route('staffs.show', $staff->id) }}" class="fa fa-eye"> </a>
       <a href="{{ route('staffs.edit', $staff->id) }}" class="fa fa-pencil"> </a>
    </div>
</div>
</div>

@endforeach
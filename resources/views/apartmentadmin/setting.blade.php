<div class="dropdown pull-right">
    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Click for More Features and Setting"><i class="fa fa-cog fa-2x"></i>
    </button>

  <ul class="dropdown-menu profile-dropdown" role="menu">

        <a href="{{ route('members.edit', [$users->id]) }}" class="btn btn-info">Edit</a>

    {{--<li class="bg-master-lighter">--}}
      {{--<a href="#" class="clearfix">--}}
      {!! Form::open(['method'=> 'DELETE', 'route' => ['members.destroy', $users->id]]) !!}
      {!! Form::submit('Delete', array('class' =>'btn btn-danger')) !!}
      {!! Form::close() !!}
        {{--<span class="pull-left" title="Delete this Apartment">Delete</span>--}}
        {{--<span class="pull-right"><i class="fa fa-trash"></i></span>--}}
      {{--</a>--}}
    {{--</li>--}}
  </ul>

</div>
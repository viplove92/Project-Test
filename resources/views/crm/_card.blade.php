@foreach($lists as $list)
    <div class="col-md-3 sdiv delete" align="center">
        <!-- CONTACT ITEM -->
        <div class="panel panel-default">
            <div class="panel-body profile">
                <div class="profile-image">
                    @if($list->img == 'gravatar')
                        <img src="http://www.gravatar.com/avatar/{($ds['email'])|md5}?s=200" class="img-thumbnail img-responsive" alt="{$ds['fname']} {$ds['lname']}">
                    @elseif($list->img == '')
                        <img src="http://www.gravatar.com/avatar/{($ds['email'])|md5}?s=200" class="img-thumbnail img-responsive" alt="{$ds['fname']} {$ds['lname']}">
                    @else
                        <img src="{$ds['img']}" class="img-thumbnail img-responsive" alt="{$ds['account']}">
                    @endif
                </div>
                <div class="profile-data">

                    <div class="profile-data-name">{{ $list->account }}</div>

                </div>

            </div>
            <div class="panel-body">
                <div class="contact-info">

                    <p><small>Email</small><br/>
                    @if($list->email != '')
                    {{ $list->email }}
                    @else
                    NA
                    @endif</p>

                    <p>
                        <a href="{{ route('crm.show', $list->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> View</a>

                        <a href="{{ route('crm.edit', $list->id) }}" class="btn btn-complete btn-xs"><i class="fa fa-edit"></i> Edit</a>

                        {!! Form::open(['method'=> 'DELETE', 'route' => ['crm.destroy', $list->id]]) !!}
                            <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete User" data-message="Are you sure you want to delete this user ?">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </button>
                        {!! Form::close() !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endforeach
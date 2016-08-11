<div class="col-md-3">

    <section class="panel">
        <div class="panel-body">
            <div class="thumb-info mb-md">
            @if($list->img == 'gravatar')
                   <img src="http://www.gravatar.com/avatar/{($d['email'])|md5}?s=400" class="img-thumbnail img-responsive" alt="{$d['fname']} {$d['lname']}">
            @elseif($list->img == '')
                   <img src="http://www.gravatar.com/avatar/{($d['email'])|md5}?s=400" class="img-thumbnail img-responsive" alt="{$d['fname']} {$d['lname']}">
                   {{--<img src="sysfrm/uploads/system/profile-icon.png" class="img-thumbnail img-responsive" alt="{$d['fname']} {$d['lname']}">--}}
            @else
                   <img src="{$d['img']}" class="img-thumbnail img-responsive" alt="{$d['fname']} {$d['lname']}">
            @endif
                <div class="thumb-info-title">
                    <span class="thumb-info-inner">{{ $list->account }}</span>
                </div>
            </div>

            <h5 class="text-muted">{{ $list->email }}</h5>
            @if($list->phone != '')
               <h5 class="text-muted">{{ $list->phone }}</h5>
            @endif
        </div>
    </section>

</div>
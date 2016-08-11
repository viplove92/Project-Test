<div class="col-sm-6">
    <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
            <h4 align="center"> Manage </h4>
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('apartments.show', Auth::user()->profile->defaultApartment) }}" class="btn btn-info" title="Default Apartment Page"> <i class="fa fa-home"></i></a>
                    <a href="{{ route('apartments.edit', Auth::user()->profile->defaultApartment) }}" class="btn btn-info" title="Edit Apartment Details"> <i class="fa fa-edit"></i></a>
                    <a href="{{ route('members.index') }}" class="btn btn-info" title=" {{ count($profiles) }} Member"> <i class="fa fa-users"></i> {{ count($profiles) }} </a>
                    <a href="{{ route('members.create') }}" class="btn btn-info" title="Add Member"> <i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-info" title="{{ count($requestBy) }} Requests"> <i class="fa fa-plus-circle"></i> {{ count($requestBy) }}</a>
                    <a href="{{ route('complaints.index') }}" class="btn btn-info" title="# Complaints"> <i class="fa fa fa-bug"></i> #</a>
                    <a href="{{ route('polls.index') }}" class="btn btn-info" title="# Polls"> <i class="fa fa-bar-chart"></i> #</a>
                </div>
            </div>

        </div>
    </div>
</div>
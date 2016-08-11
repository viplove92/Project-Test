<div class="row">
    <div class="col-md-12">

        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">

                <form class="form-horizontal" method="post" action="#">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Search by Name..."/>
                                <div class="input-group-btn">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <a href="{{ route('crm.create') }}" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Add New Contact</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
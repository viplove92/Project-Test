<div class="wrapper wrapper-content animated fadeInUp">

<div class="ibox">
<div class="ibox-title">
    <h5>Products</h5>
    <div class="ibox-tools">
        <a href="{{ route('product.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Product</a>
        <a href="{{ route('service.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Service</a>
    </div>
</div>
<div class="ibox-content" id="ibox_form">
<div class="input-group"><input type="text" placeholder="Search" id="txtsearch" class="input-sm form-control"> <span class="input-group-btn">
                <button type="button" id="search" class="btn btn-sm btn-primary"> Search</button> </span></div>
<input type="hidden" id="stype" value="{$type}">

</div>
</div>
</div>

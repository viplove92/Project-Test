<div class="panel panel-default">
<div class="panel-body">
<div class="form-group-attached">

        <h5>Total Income : <i class="fa fa-inr"></i> {{ number_format($income,2) }}</h5>
        <h5>Total Income This Month : <i class="fa fa-inr"></i> {{ number_format($monthincome,2) }}</h5>
        <h5>Total Income This Week : <i class="fa fa-inr"></i> {{ number_format($weekincome,2) }}</h5>
        <h5>Total Income Last 30 days : <i class="fa fa-inr"></i> {{ number_format($thirtydayincome,2) }}</h5>
        <hr>
        <h5 align="center">Last 10 Deposits</h5>
        <hr>
        @include('reports._incomelist')
        <hr>

        <h4 align="center">Monthly Income Graph</h4>
        <hr>

        <div class="easybox float-e-margins">
            <div class="easybox-content" id="easybox_form">
                <div align="center" id="incomereportline" style="width:100%; height:400px;"></div>
            </div>
        </div>

        <hr>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-body">
<div class="form-group-attached">

        <h5>Total Expense : <i class="fa fa-inr"></i> {{ number_format($expense,2) }}</h5>
        <h5>Total Expense This Month : <i class="fa fa-inr"></i> {{ number_format($monthexpense,2) }}</h5>
        <h5>Total Expense This Week : <i class="fa fa-inr"></i> {{ number_format($weekexpense,2) }}</h5>
        <h5>Total Expense Last 30 days : <i class="fa fa-inr"></i> {{ number_format($thirtydayexpense,2) }}</h5>
        <hr>
        <h5 align="center">Last 10 Expenses</h5>
        <hr>
        @include('reports._expenselist')
        <hr>

        <h4 align="center">Monthly Expense Graph</h4>
        <hr>

        <div class="easybox float-e-margins">
                <div class="easybox-content" id="easybox_form">
                        <div align="center" id="expensereportline" style="width:100%; height:400px;"></div>
                </div>
        </div>
        <hr>

</div>
</div>
</div>

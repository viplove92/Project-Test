<div class="panel panel-default">
<div class="panel-body">
<div class="form-group-attached">

                <h5>Total Income : <i class="fa fa-inr"></i> {{ number_format($income,2) }}</h5>
                <h5>Total Expense : <i class="fa fa-inr"></i> {{ number_format($expense,2) }}</h5>
                <hr>
                <h5>Income - Expense = <i class="fa fa-inr"></i> {{ number_format($inmex,2) }}</h5>
                <hr>
                <h5>Total Income This Month : <i class="fa fa-inr"></i> {{ number_format($monthincome,2) }}</h5>
                <h5>Total Expense This Month : <i class="fa fa-inr"></i> {{ number_format($monthexpense,2) }}</h5>
                <hr>
                <h5>Income - Expense = <i class="fa fa-inr"></i> {{ number_format($inmexm,2) }}</h5>
                <hr>

                <h4>Income Vs Expense This Year</h4>
                <hr>
                <div class="easybox float-e-margins">
                <div class="easybox-content" id="easybox_form">
                    <div align="center" id="container" style="width:100%; height:400px;"></div>

                </div>
                </div>
                <hr>
            </div>
</div>
</div>
</div>

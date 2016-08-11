<script>
    $(function () {
        $('#expensereportline').highcharts(
                {!! json_encode($expenselinecharts) !!}
        );
    });
</script>
{{--<script>--}}
    {{--$(function () {--}}
        {{--$('#piechart').highcharts(--}}
                {{--{!! json_encode($piecharts) !!}--}}
        {{--);--}}
    {{--});--}}
{{--</script>--}}

<script>
    $(function () {
        $('#piechart').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Income vs Expense'
            },
            subtitle: {
                text: '{!! date('F Y') !!}'
            },
            tooltip: {
                valuePrefix: ' ₹ '
            },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45
                }
            },
            series: [{
                name: 'Total amount',
                data: [
                    ['Income', {{ $piei }}],
                    ['Expense', {{ $piee }}]

                ]
            }]
        });
    });
</script>
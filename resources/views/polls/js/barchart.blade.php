<script>
    $(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: '{{ $title }}'
            },
            subtitle: {
                text: 'Result'
            },
            xAxis: {
                categories:
                    {!!  json_encode($option) !!} ,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Votes'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Number of Votes',
                data: {{ json_encode($option_count) }}
            }]
        });
    });
</script>

{{--'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',--}}



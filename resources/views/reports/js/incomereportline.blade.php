<script>
    $(function () {
        $('#incomereportline').highcharts(
                {!! json_encode($incomelinecharts) !!}
        );
    });
</script>

{{--<script>--}}
    {{--$(function () {--}}
        {{--$('#incomereportline').highcharts({--}}
            {{--title: {--}}
                {{--text: 'Monthly Income Stats',--}}
                {{--x: -20 //center--}}
            {{--},--}}
            {{--credits: {--}}
                {{--enabled: false--}}
            {{--},--}}
            {{--subtitle: {--}}
                {{--text: '{!! date('Y') !!}',--}}
                {{--x: -20--}}
            {{--},--}}
            {{--xAxis: {--}}
                {{--categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']--}}
{{--                categories: [ {{ $dates }} ]--}}
            {{--},--}}
            {{--yAxis: {--}}
                {{--title: {--}}
                    {{--text: 'Amount ( ₹ )'--}}
                {{--},--}}
                {{--plotLines: [{--}}
                    {{--value: 0,--}}
                    {{--width: 1,--}}
                    {{--color: '#808080'--}}
                {{--}]--}}
            {{--},--}}
            {{--tooltip: {--}}
                {{--valuePrefix: ' ₹ '--}}
            {{--},--}}
            {{--legend: {--}}
                {{--layout: 'vertical',--}}
                {{--align: 'right',--}}
                {{--verticalAlign: 'middle',--}}
                {{--borderWidth: 0--}}
            {{--},--}}
            {{--series: [{--}}
                {{--name: 'Income',--}}
                {{--data: [ {{ $incomearray }} ]--}}

{{--//                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]--}}
            {{--}]--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
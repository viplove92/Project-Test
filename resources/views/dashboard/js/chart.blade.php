<script>
    $(function () {
        $('#container').highcharts(
                {!! json_encode($charts) !!}
        );
    });
</script>
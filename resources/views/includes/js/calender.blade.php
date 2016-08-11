<script>

    $(document).ready(function() {
        $('#calendar').fullCalendar(
                {!! json_encode($events) !!}
             );
    });

</script>
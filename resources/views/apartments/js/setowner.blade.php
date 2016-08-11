<script>

    $(document).ready(function(){
      $('#isOwner').change(function() {
            alert("Value: " + $("#isOwner").val());
      });
    });

</script>


{{--<script>--}}

    {{--$(document).ready(function(){--}}
      {{--$('#isOwner').change(function() {--}}
        {{--$.ajax({--}}
          {{--url: '/api/owner',--}}
          {{--type: "post",--}}
          {{--data: {--}}
                    {{--'id': $('input[name=id]').val(),--}}
                    {{--'_token': $('input[name=_token]').val()--}}
                {{--}--}}
        {{--});--}}
      {{--});--}}
    {{--});--}}

{{--</script>--}}
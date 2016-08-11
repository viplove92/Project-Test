{{--{!! HTML::script('../plugins/switchery/js/switchery.min.js') !!}--}}

<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
    // Success color: #10CFBD
    elems.forEach(function(html) {
      var switchery = new Switchery(html, {color: '#10CFBD'});
    });
</script>
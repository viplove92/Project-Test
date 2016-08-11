<script>

$(document).ready(function(){

		$('#group').click(function() {
			if($(this).val() == "Investment") {
//				$('#other').hide();
				$('#other').show();
			} else {
				$('#other').hide();
//				$('#other').show();
			}
		});
});
</script>


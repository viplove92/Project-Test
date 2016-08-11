<script>

$(document).ready(function(){

        $('.update').click(function(e) {
        e.preventDefault();

            var url             = "set-default";
            var $post             = {};
            $post.id            = $(this).attr('rel');
            $post.size            = $('#size_' + $post.id).val();

            $.ajax({
            type: "POST",
            url: url,
            data: $post,
            cache: false,
            success: function(data){
               return data;
            }
            });
            return false;
        });
     });

</script>
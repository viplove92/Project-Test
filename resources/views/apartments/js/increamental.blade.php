<script>
    $(function(){
        new Vue({
            el: 'body',
            data: {
                cart: [{}]
            },
            computed: {
                total: function(){
                    var result = 0;
                    $(this.cart).each(function(idx, item){
                        result += item.price * item.quantity || 0
                    })
                    return result;
                },

                tax: function(){
                    var result = 0;
                    $(this.cart).each(function(idx, total){
                        result += total * '14.5' || 0
                    })
                    return result;
                }
            },
            methods:{
                addItem: function(){
                    this.cart.push({})
                },
                deleteItem: function(item){
                    this.cart.$remove(item)
                }
            }
        })
    })
</script>
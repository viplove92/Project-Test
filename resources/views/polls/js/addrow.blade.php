<script>
    var items = [
        { option: ''},
        { option: ''}
    ];

    var vm = new Vue({
        el: '#app',
        data: {
            items: items,
            subtotal: 0
        },
        methods: {
            addItem: function (e) {
                e.preventDefault()
                this.items.push({
                    option: null
                })
            },
            removeItem: function (item) {
                if (this.items.length > 2) {
                    this.items.$remove(item)
                } else {
                    alert('You need at least two item to conduct poll !')
                }
            }
        },
        ready: function (e) {

        }
    })

</script>

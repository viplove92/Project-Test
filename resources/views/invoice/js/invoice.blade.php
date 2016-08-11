<script>
    var items = [
        { description: 'Fancy desktop thing', price: 999.99, quantity: 1, total: null },
        { description: 'Wireless Keyboard+Mouse', price: 59.99, quantity: 1, total: null },
        { description: 'New HP Printers', price: 89.99, quantity: 4, total: null }
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
                    price: null,
                    quantity: null,
                    total: null
                })
            },
            removeItem: function (item) {
                if (this.items.length > 1) {
                    this.items.$remove(item)
                } else {
                    alert('You need at least one item silly!')
                }
            },
            itemsTotal: function () {
                var itemTotal = 0;
                var itemsTotal =  0;
                for (i=0; i<this.items.length; i++) {
                    itemTotal = items[i].price * items[i].quantity
                    itemsTotal += itemTotal
                }
                return itemsTotal;
            }
        },
        computed: {
            subtotal: function () {
                if (this.deposit) {
                    return (this.itemsTotal() - this.deposit).toFixed(2)
                } else {
                    return this.itemsTotal().toFixed(2)
                }
            },
            total: function () {
                var hstValue = (this.hst / 100) + 1
                return (this.subtotal * hstValue).toFixed(2)
            }
        },
        ready: function (e) {

        }
    })

</script>
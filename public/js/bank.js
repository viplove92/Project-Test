var vm = new Vue({

    http: {
        root: '/root',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
        }
    },

    el:'#BankController',

    data: {
        newAccount: {
            id: '',
            account: '',
            description: '',
            balance: ''
        },
        success: false,
        edit: false
    },

    methods: {

        fetchBank: function () {
            this.$http.get('/api/banks', function (data){
                this.$set('banks', data)
            })
        },

        RemoveBank: function (id) {
            var ConfirmBox = confirm("Are you sure, you want to delete this User?")

            //if(ConfirmBox) this.$http.delete('/api/banks/' + id)
            if(ConfirmBox) this.$http.delete('/bankncash/' + id)

            this.fetchBank()
        },

        EditBank: function (id) {
            var bank = this.newBank

            this.newBank = { id: '', account: '', description: '', balance: ''}

            //this.$http.patch('/api/banks/' + id, user, function (data) {
            this.$http.patch('/bankncash/' + id, bank, function (data) {
                console.log(data)
            })

            this.fetchBank()

            this.edit = false

        },

        ShowBank: function (id) {
            this.edit = true

            this.$http.get('/bankncash/' + id, function (data) {
                this.newBank.id = data.id
                this.newBank.account = data.account
                this.newBank.description = data.description
                this.newBank.balance = data.balance
            })
        },

        AddBank: function () {
            // User input
            var bank = this.newBank

            // Clear form input
            this.newBank = { account:'', description:'', balance:'' }

            // Send post request
            //this.$http.post('/api/banks/', bank)
            this.$http.post('/bankncash', bank)

            // Reload page
            this.fetchBank()

        }
    },

    computed: {
        validation: function () {
            return {
                account: !!this.newBank.account.trim(),
                description: !!this.newBank.description.trim(),
                balance: !!this.newBank.balance.trim()
            }
        },

        isValid: function () {
            var validation = this.validation
            return Object.keys(validation).every(function (key) {
                return validation[key]
            })
        }

    },

    ready: function () {
        this.fetchBank()
    }
});

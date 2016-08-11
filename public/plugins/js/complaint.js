Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#complaint',

    data: {
        newMessage: { type: '', area: '' },
        submitted: false
    },

    computed: {
        errors: function() {
            for (var key in this.newMessage) {
                if ( ! this.newMessage[key]) return true;
            }

            return false;
        }
    },

    ready: function() {
        this.fetchMessages();
    },

    methods: {
        fetchMessages: function() {
            this.$http.get('/likes', function(messages) {
                this.$set('messages', messages);
            });
        },

        onSubmitForm: function(e) {
            e.preventDefault();

            var message = this.newMessage;

            this.messages.push(message);
            this.newMessage = { type: '', area: '' };
            this.submitted = true;

            this.$http.post('/likes', message);

        }
    }
});

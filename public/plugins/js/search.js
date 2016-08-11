Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#search',

    data: {
        query:'',
        users: []
    },

    ready: function() {
        this.$http.get = 'http://localhost:9200/easymanage/_search?from=0&size=10&q=%QUERY*';
        //this.fetchMessages();
    },

    methods: {
        search: function() {
            index.search(this.query, function(error, results) {
                this.users = results.hits;
            }.bind(this));
        }
    }

});

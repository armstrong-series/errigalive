if (window.Vue) {
    new Vue({
        el: '#index',

        data: {
            isLoading: false,



            route: {

            },

            events: []

        },


        mounted() {
            this.events = JSON.parse(newJQuery('#events').val());

        },


        methods: {




        }
    });
}

if (window.Vue) {
    new Vue({
        el: '#ticket',

        data: {

            details: {

            }
        },



        mounted() {
            this.details = JSON.parse($('#event-details').val());
            console.log('events..', this.details)

        },


        methods: {




        }
    });
}

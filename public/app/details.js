if (window.Vue) {
    new Vue({
        el: '#details',

        data: {

            details: {

            },
            ticket: {
                qty: ""
            },

            route: {
              ticket_create: ""
            }

        },



        mounted() {
            this.details = JSON.parse($('#event-details').val());
            this.ticket_create = JSON.parse($('#event-details').val());
            console.log('events..', this.details)

        },


        methods: {

            saveTicket() {

                const ticket = {
                    name: this.details.name,
                    price: this.details.price,
                    qty: this.ticket.qty,

                }
                axios.post(this.route.ticket_create, ticket).then((response) => {
                   let url = response.data.url;
                   window.location = url;


                }).catch((error) => {
                    this.isLoading = false
                    this.$toastr.Add({
                        msg: error.response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "error",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "red" }
                    });


                })

            },




        }
    });
}

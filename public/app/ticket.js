if (window.Vue) {
    new Vue({
        el: '#ticket',

        data: {

            isLoading: false,
            details: {

            },

            ticket: {},

           route: {
             payment: ""
           }
        },



        mounted() {
            this.ticket = JSON.parse(window.localStorage.getItem('ticket'));
            console.log(this.ticket)
            this.route.payment = $("#paymentTicket").val();
        },


        methods: {

            makePayment() {
                this.isLoading = true;
                const ticket = {
                   price: this.ticket.price,
                  _token: $('input[name=_token]').val()
                }
                axios.post(this.route.payment, ticket,{
                    headers: {
                        'Content-Type': 'application/json'
                    },
                }).then((response) => {
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#1BBCE8" }
                    });

                    this.isLoading = false;

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

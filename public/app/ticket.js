if (window.Vue) {
    new Vue({
        el: '#ticket',

        data: {

            isLoading: false,
            details: {

            },

            ticket: {},

           route: {
             payment: "",
             callback_url: ""
           }
        },



        mounted() {
            this.ticket = JSON.parse(window.localStorage.getItem('ticket'));
            console.log(this.ticket)
            this.route.payment = $("#paymentTicket").val();
            this.route.callback_url = $("#callbackURL").val();
        },


        methods: {

            makeNewPayment(){
                const ticket = {
                    price: this.ticket.price,
                 }
                 return ticket
            },

            // makePayment() {

            //     const url = "https://api.paystack.co/transaction/initialize";
            //     const test_key = "sk_test_185e37f2d508f41a85ee621c51fd8d8d56641c32"
            //     const ticket = {
            //        amount: this.ticket.price,
            //        email: "admin@user.com",
            //        subaccount : "ACCT_xf26a1x8cp84xh8",
            //        currency : 'NGN',
            //        channels : ["card"],
            //        callback_url : this.route.callback_url,
            //       _token: $('input[name=_token]').val()
            //     }
            //     axios.post(url, ticket, {
            //         headers: {
            //             'Content-Type' : 'application/json',
            //             'Authorization' : 'Bearer ' + test_key,

            //         },


            //     }).then((response) => {
            //         console.log('response..',response)


            //     }).catch((error) => {
            //         this.isLoading = false
            //         this.$toastr.Add({
            //             msg: error.response.data.message,
            //             clickClose: false,
            //             timeout: 2000,
            //             position: "toast-top-right",
            //             type: "error",
            //             preventDuplicates: true,
            //             progressbar: false,
            //             style: { backgroundColor: "red" }
            //         });


            //     })

            // },
        }
    });
}

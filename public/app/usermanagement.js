if (window.Vue) {
    new Vue({
        el: '#user-management',

        data: {

            details: {

            },

            ticket: {},

           payment: {
             checkout: ""
           }
        },



        mounted() {
            this.ticket = JSON.parse(window.localStorage.getItem('new_ticket'));
            this.payment.checkout = $("#createEvent").val();
        },


        methods: {


            makePayment() {
                axios.post(this.route.createEvent, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                }).then((response) => {
                    $('.edit_event_modal').modal('hide');
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
                    this.events.push(Object.assign({}, response.data.event, {}));

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

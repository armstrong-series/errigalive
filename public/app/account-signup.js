if (window.Vue) {
    new Vue({
        el: "#account",
        data: {
            isLoading: false,

            account: {
                name: '',
                email: '',
                nationality: '',
                password: '',
                confirm_password: ""

            },

            route: {
                 accountCreate: ""
            }


        },



        mounted() {
            this.route.accountCreate = $("#signup").val();

        },

        methods: {


            signup() {
                this.isloading = false;

                let formData = new FormData();
                for (let key in this.account) {
                    let value = this.account[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.accountCreate, formData).then((response) => {
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
                    console.log(response.data.message)
                    setTimeout(() => {
                        window.open('/login');
                    }, 3000);


                }).catch((error) => {
                    this.isLoading = false
                    if (error.response) {
                        this.$toastr.Add({
                            msg: error.response.data.message,
                            clickClose: false,
                            timeout: 2000,
                            position: "toast-top-right",
                            type: "error",
                            preventDuplicates: true,
                            progressbar: false,
                            style: { backgroundColor: "#CC5BB8" }
                        });
                    } else {
                        this.$toastr.Add({
                            msg: "Oops! Unable to continue",
                            clickClose: false,
                            timeout: 2000,
                            position: "toast-top-right",
                            type: "error",
                            preventDuplicates: true,
                            progressbar: false,
                            style: { backgroundColor: "#CC5BB8" }
                        });
                    }



                })

            },




        }
    });
}

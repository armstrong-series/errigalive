if (window.Vue) {
    new Vue({
        el: "#account",
        data: {
            isLoading: false,

            authenticate: {
                email: "",
                password: ""
            },

            account: {
                firstname: '',
                lastname: '',
                email: '',
                password: '',
                confirm_password: ""

            },

            url: {

                accountCreate: ""
            }


        },



        mounted() {

            this.url.authenticate = $("#authenticate").val();
            this.url.accountCreate = $("createAccount").val();
        },

        methods: {


            signupAccount() {
                this.isloading = false;

                let formData = new FormData();
                for (let key in this.account) {
                    let value = this.account[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.url.accountCreate, formData).then((response) => {
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "green" }
                    });
                    this.isLoading = false;
                    setTimeout(() => {
                        window.open('/login');
                    }, 3000);


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
                        style: { backgroundColor: "#CC5BB8" }
                    });


                })

            },










        }
    });
}

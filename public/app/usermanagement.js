if (window.Vue) {
    new Vue({
        el: '#user-management',

        data: {

            isLoading: false,
            user: {
                name: '',
                email: '',
                password: '',
                confirm_password: '',
                user_type: '',
                nationality: ''
            },

            userEdit: {
                name: '',
                email: '',
                password: '',
                confirm_password: '',
                user_type: '',
                nationality: ''
            },


            users: [],

           route: {
             user: "",
             delete: "",
             update: ""
           }
        },



        mounted() {
            this.route.user = $("#createUser").val();
            this.route.update = $("#updateUser").val();
            this.route.delete = $("#deleteUser").val();
            this.users = JSON.parse($('#users').val());

        },



        methods: {

            selectUser(index){
                this.userEdit = Object.assign({}, this.users[index]);
            },

            createUser() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.user) {
                    let value = this.user[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.user, formData).then((response) => {
                    $('#addUser').modal('hide');
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
                    this.users.push(Object.assign({}, response.data.user, {}));

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



            updateUser() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.userEdit) {
                    let value = this.userEdit[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.update, formData).then((response) => {
                    $('#editUser').modal('hide');
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
                    let userEdit = response.data.user;
                    this.users= this.events.map((user) =>{
                        if(user.id === userEdit.id){
                           user = Object.assign({},userEdit)
                        }
                        return user;
                    })


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


            deleteUser(index) {
                let user = Object.assign({}, this.users[index]);
               user._token = $('input[name=_token]').val();

                const customAlert = swal({
                    title: 'Warning',
                    text: `This action can't be undone. Are you sure?`,
                    icon: 'warning',
                    closeOnClickOutside: false,
                    buttons: {
                        cancel: {
                            text: "cancel",
                            visible: true,
                            className: "",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Confirm",
                            value: 'delete',
                            visible: true,
                            className: "btn-info",
                        }
                    }
                });

                customAlert.then(value => {
                    if (value == 'delete') {
                        this.isLoading = true;
                        axios.post(this.route.delete,{id: user.id})
                            .then(response => {
                                this.isLoading = false;
                                this.users.splice(index, 1);
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
                            });

                    }
                });
            },
        }
    });
}

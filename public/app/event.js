if (window.Vue) {
    new Vue({
        el: '#event',

        data: {
            isLoading: false,

            event: {
                name: "",
                venue: "",
                date: "",
                description: "",
            },


            banner: "",
            originalFile: '',
            imageFile: null,
            input: null,
            isImageUploading: false,


            route: {
                createEvent: "",
                updateEvent: ""
            },

            events: []

        },


        mounted() {

            this.route.createEvent = $("#createEvent").val();
            this.events = JSON.parse($('#events').val());
            console.log('events..', this.events)

        },


        methods: {

            createEvent() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.event) {
                    let value = this.event[key]
                    formData.append(key, value);
                }
                formData.append('event_banner', this.originalFile);
                formData.append('_token', $('input[name=_token]').val());

                axios.post(this.route.createEvent, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                }).then((response) => {
                    $('.bd-example-modal-lg').modal('hide');
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
                    window.location = "/admin/events";
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


            deleteEvents(index) {
                let event = Object.assign({}, this.events[index]);
                event._token = $('input[name=_token]').val();

                const customAlert = swal({
                    title: 'Warning',
                    text: `Are you sure you want to delete this Template? This action cannot be undone.`,
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
                            className: "btn-danger",
                        }
                    }
                });

                customAlert.then(value => {
                    if (value == 'delete') {
                        this.isLoading = true;
                        axios.delete(this.url.deleteTemplate, { data: template })
                            .then(response => {
                                this.isLoading = false;
                                this.all_templates.splice(index, 1);
                                this.$notify({
                                    title: 'Success',
                                    message: response.data.message,
                                    type: 'success'
                                });

                            }).catch(error => {
                                if (error.response) {
                                    this.isLoading = false;
                                    this.$notify.error({
                                        title: 'Error',
                                        message: error.response.data.message
                                    });
                                } else {
                                    this.$notify.error({
                                        title: 'Error',
                                        message: 'oops! Unable to complete request.'
                                    });
                                }
                            });

                    }
                });
            },

            showImagePreview(event) {
                this.input = event.target;
                if (this.input.files && this.input.files[0]) {
                    this.originalFile = this.input.files[0]
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageFile = e.target.result;
                        console.log(this.imageFile)
                    };

                    reader.readAsDataURL(this.input.files[0]);
                }
            },

            clearImage() {
                this.imageFile = null;
                this.input = null;
            },


        }
    });
}

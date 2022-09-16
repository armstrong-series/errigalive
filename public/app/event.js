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
                price: "",
                event_type: "",
                category: ""
            },

            eventEdit: {
                name: "",
                venue: "",
                date: "",
                description: "",
                price: ""
            },





            banner: "",
            originalFile: '',
            imageFile: null,
            input: null,
            isImageUploading: false,


            route: {
                createEvent: "",
                updateEvent: "",
                deleteEvent: ""
            },

            events: []

        },


        mounted() {

            this.route.createEvent = $("#createEvent").val();
            this.route.updateEvent = $("#updateEvent").val();
            this.route.deleteEvent = $("#deleteEvent").val();
            this.events = JSON.parse($('#events').val());


        },


        methods: {

            selectEvent(index){
                this.eventEdit = Object.assign({}, this.events[index]);
            },

            createEvent() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.event) {
                    let value = this.event[key]
                    formData.append(key, value);
                }
                console.log('file',this.originalFile)
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


            updateEvent() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.eventEdit) {
                    let value = this.eventEdit[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.updateEvent, formData).then((response) => {
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
                    let eventEdit = response.data.event;
                    this.events = this.events.map((event) =>{
                        if(event.id === eventEdit.id){
                            event = Object.assign({},eventEdit)
                        }
                        return event;
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
                        style: { backgroundColor: "red" }
                    });


                })

            },


            deleteEvent(index) {
                let event = Object.assign({}, this.events[index]);
                event._token = $('input[name=_token]').val();

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
                            className: "btn-danger",
                        }
                    }
                });

                customAlert.then(value => {
                    if (value == 'delete') {
                        this.isLoading = true;
                        axios.post(this.route.deleteEvent,{id: event.id})
                            .then(response => {
                                this.isLoading = false;
                                this.events.splice(index, 1);
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

            showImagePreview(event) {
                this.input = event.target;
                if (this.input.files && this.input.files[0]) {
                    this.originalFile = this.input.files[0]
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageFile = e.target.result;
                        // console.log(this.imageFile)
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

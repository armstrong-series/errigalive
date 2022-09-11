if (window.Vue) {
    new Vue({
        el: '#index',

        data: {
            isLoading: false,



        },


        mounted() {




        },


        methods: {


            selectImage(e){
                if (window.File && window.FileList && window.FileReader) {
                    var files = e.target.files; //FileList object
                    var file = files[0];
                    this.profile_image = window.URL.createObjectURL(file);
                    this.currentFileUpload = file;

                } else {
                    this.$notify.error({
                        title: 'Error',
                        message: 'Unable to complete request. Please update your browser'
                    });
                }
            },

        }
    });
}

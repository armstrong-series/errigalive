if (window.Vue) {
    new Vue({
        el: '#details',

        data: {

            details: {

            },
            ticket: {
                qty: "",
                category: ""
            },

            route: {
              ticket_create: ""
            }

        },



        mounted() {
            this.details = JSON.parse(newJQuery('#event-details').val());
            console.log('details...', this.details)
            this.ticket_create = JSON.parse(newJQuery('#event-details').val());

        },


        methods: {

            buyTicket() {
                if(this.ticket.category ==='regular'){
                    this.details.price = 5000
                }else if(this.ticket.category ==='vip'){
                    this.details.price = 10000
                }else if(this.ticket.category ==='gold'){
                    this.details.price = 500000
                }else if(this.ticket.category ==='platinium'){
                    this.details.price = 1000000
                }else if(this.ticket.category ==='early_bird'){
                    this.details.price = 2000
                }else if(this.ticket.category ==='gate'){
                    this.details.price = 3000
                }else if(this.ticket.category ==='front_row'){
                    this.details.price = 5000
                }

                let new_price = this.details.price * this.ticket.qty

                const ticket = {
                    name: this.details.name,
                    price: new_price,
                    qty: this.ticket.qty,
                    category: this.ticket.category

                }
                window.localStorage.setItem('new_ticket', JSON.stringify(ticket));


            },




        }
    });
}

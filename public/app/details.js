if (window.Vue) {
    new Vue({
        el: '#details',

        data: {

            details: {

            },
            ticket: {
                qty: ""
            },

            route: {
              ticket_create: ""
            }

        },



        mounted() {
            this.details = JSON.parse(newJQuery('#event-details').val());
            this.ticket_create = JSON.parse(newJQuery('#event-details').val());


        },


        methods: {

            buyTicket() {
                let new_price = this.details.price * this.ticket.qty
                const ticket = {
                    name: this.details.name,
                    price: new_price,
                    qty: this.ticket.qty,

                }
                console.log('new ticket',ticket)
                window.localStorage.setItem('new_ticket', JSON.stringify(ticket));



            },




        }
    });
}

let test = new Vue({
    el: '#app',
    data: {
        username: '',
        email: '',
        password: '',
        url: 'https://example.com',
        showModal: false,
        showTable: false,
    },
    computed: {
        usernameClass() {
            return this.username ? 'text-danger' : '';
        }
    },
    methods: {
        toggleModal() {
            this.showModal = !this.showModal; // Toggle showModal
            this.showTable = false;             //---------------  extra
            this.modalFormClass = 'd-block';      //---------------  extra
        },
        savePayment() {
            // Add functionality to save payment data
            console.log('Payment saved');
            this.showTable = true;                      //---------------  extra
            this.modalFormClass = 'd-none';                  //---------------  extra  and in frontend remove :class='modalFormClass'
            // this.toggleModal(); // Close modal after saving
        }
    }
});
let test = new Vue({
    el: '#app',
    data: {
        username: '',
        email: '',
        password: '',
        url: '',
        showModal: false
    },
    mounted: function () {
        this.url = 'https://example.com';
    },
    computed: {
        usernameClass() {
            return this.username ? 'text-danger' : '';
        }
    },
    methods: {
        openModal() {
            console.log('Modal opened');
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
        savePayment() {
            console.log('Payment saved');
            this.closeModal();
        }
    }
});

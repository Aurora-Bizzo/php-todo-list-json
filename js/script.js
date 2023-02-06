const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            language: '',
            errorMessage: '',
            clicked: ''
        }
    },
    methods: {

        addTodo() {

            const data = {
                language: this.language,
                done: false,
            }

            if (this.language.trim() != '' && this.language != '') {
                axios.post(this.apiUrl, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.language = '';

                    this.todoList = response.data;
                    this.errorMessage = '';
                })
            }
            else {
                this.errorMessage = 'Stringa Vuota';
            }
        },

        deleteTodo(index) {

            const ciccio = {
                delete: index
            }

            axios.post(this.apiUrl, ciccio, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todoList = response.data
            });
        },
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    }
}).mount('#app');
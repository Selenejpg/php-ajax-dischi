var app = new Vue({
    el: '#app',
    data: {
        dischi: [],
    },
    created() {
        axios.get('http://localhost:81/php-ajax-dischi/versione%20vue/api/dischi.php')
            .then((res) => {
                this.dischi = res.data;
            })
    }
})
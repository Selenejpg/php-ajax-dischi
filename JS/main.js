var app = new Vue({
    el: '#app',
    data: {
        arrayDischi: [],
    },
    created() {
        axios.get('')
            .then((res) => {
                this.arrayDischi = res.data.response;
            })
    }
})
const { createApp } = Vue;
createApp({
    data() {
        return {
            records: [],
        };
    },

    created() {},

    mounted() {
        this.apiCall();
    },

    methods: {
        apiCall() {
            axios
                .get("./server.php")
                .then((response) => {
                    // handle success
                    console.log(response.data);
                    this.records = response.data;
                })
                .catch((error) => {
                    // handle error
                    console.log(error);
                });
        },
    },
}).mount("#app");

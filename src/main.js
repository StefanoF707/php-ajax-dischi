import Vue from 'vue';
const axios = require('axios').default;

let app = new Vue (
    {
        el: "#app",
        data: {
            albums: [],
            filterGenre: "",
        },
        methods: {

            getAllAlbums: function () {
                axios.get("/php-ajax-dischi/server.php")
                .then( (response) => {
                    this.albums = response.data;
                });
            },

            filterAlbums: function () {

                console.log(this.filterGenre);
                axios.get("/php-ajax-dischi/server.php", {
                    params: {
                        filteredGenre: this.filterGenre,
                    }
                })
                .then( (response) => {
                    this.albums = response.data;
                });
            },

        },
        mounted: function () {
            this.getAllAlbums();
        }
    }
);

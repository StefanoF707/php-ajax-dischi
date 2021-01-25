import Vue from 'vue';
import axios from 'axios';

let app = new Vue (
    {
        el: "#app",
        data: {
            albums: [],
            filterGenre: "All",
        },
        methods: {

            getAllAlbums: function () {
                axios.get("/php-ajax-dischi/partials/server.php")
                .then( (response) => {
                    this.albums = response.data;
                });
            },

            getFilteredAlbums: function () {
                if (this.filterGenre != "All") {
                    axios.get("/php-ajax-dischi/partials/geres_server.php")
                    .then( (response) => {
                        this.albums = response.data;
                    });
                }
            }

        },
        mounted: function () {
            this.getAllAlbums();
        }
    }
);

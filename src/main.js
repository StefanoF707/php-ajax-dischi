import Vue from 'vue';
import axios from 'axios';

let app = new Vue (
    {
        el: "#app",
        data: {
            albums: [],
        },
        methods: {

            getAllAlbums: function () {
                axios.get("/php-ajax-dischi/partials/server.php")
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

<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Create new film</div>
            <div class="panel-body">
                <form v-on:submit="saveForm">
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.name ? 'has-error' : '']"> 
                            <label class="control-label">Film name</label>
                            <input type="text" v-model="film.name" class="form-control">
                            <span v-if="errors.name" class="help-block">{{ errors.name[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.description ? 'has-error' : '']">
                            <label class="control-label">Film description</label>
                            <input type="text" v-model="film.description" class="form-control">
                            <span v-if="errors.description" class="help-block">{{ errors.description[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.realease_at ? 'has-error' : '']">
                            <label class="control-label">Film date</label>
                            <input type="text" v-model="film.realease_at" class="form-control">
                            <span v-if="errors.realease_at" class="help-block">{{ errors.realease_at[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.rating ? 'has-error' : '']">
                            <label class="control-label">Film rating</label>
                            <input type="text" v-model="film.rating" class="form-control">
                            <span v-if="errors.rating" class="help-block">{{ errors.rating[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.country ? 'has-error' : '']">
                            <label class="control-label">Film country</label>
                            <input type="text" v-model="film.country" class="form-control">
                            <span v-if="errors.country" class="help-block">{{ errors.country[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.photo ? 'has-error' : '']">
                            <label class="control-label">Film photo</label>
                            <input name="photo" type="file" class="form-control-file" accept="image/*" v-on:change="film.photo">
                            <span v-if="errors.photo" class="help-block">{{ errors.photo[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.genre ? 'has-error' : '']">
                            <label class="control-label">Film genres</label>
                            <input type="text" v-model="film.genre" class="form-control">
                            <span v-if="errors.genre" class="help-block">{{ errors.genre[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div :class="['col-xs-8 form-group', errors.ticket_price ? 'has-error' : '']">
                            <label class="control-label">Film ticket price</label>
                            <input type="text" v-model="film.ticket_price" class="form-control">
                            <span v-if="errors.ticket_price" class="help-block">{{ errors.ticket_price[0] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.filmId = id;
            axios.get('../api/v1/films/' + id)
                .then(function (resp) {
                	console.log(resp.data);
                    app.film = resp.data;
                })
                .catch(function () {
                    alert("Could not load your film")
                });
        },
        data: function () {
            return {
                filmId: null,
                film: {
                    name: '',
                    description: '',
                    realease_at: '',
                    rating: '',
                    ticket_price: '',
                    country: '',
                    photo: '',
                    genres: ''
                },
                errors: []
            }
        },
        methods: {
            saveForm: function (event) {
                event.preventDefault();
                var app = this;
                var newFilm = app.film;
                app.errors = []; 
                axios.put('../api/v1/films/' + app.filmId, newFilm)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        app.errors = resp.response.data;
                        alert("Could not create your film");
                    });
            }
        }
    }
</script>

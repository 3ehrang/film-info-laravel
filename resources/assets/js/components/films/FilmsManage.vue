<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createFilm'}" class="btn btn-success">Create new film</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Film list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    	<th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Realease Date</th>
                        <th>Rating</th>  
                        <th>Ticket Price</th>
                        <th>Country</th>
                        <th>Geners</th>
                        <th>Photo</th>
                        <th width="100">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="film, index in films">
                    	<td>{{ film.id }}</td>
                        <td>{{ film.name }}</td>
                        <td>{{ film.description }}</td>
                        <td>{{ film.realease_at }}</td>
                        <td>{{ film.rating }}</td>
                        <td>{{ film.ticket_price }}</td>
                        <td>{{ film.country }}</td>
                        <td>
                        	<span class="genre-tag label label-default" v-for="genre, index in film.genres">{{ genre.title }}</span>
                        </td>
                        <td><img :src="'/'+film.photo" style="width:64px;"></td>
                        <td>
                            <router-link :to="{name: 'editFilm', params: {id: film.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(film.id, index)">
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                films: []
            }
        },
        mounted() {
            var app = this;
            axios.get('../api/v1/films')
                .then(function (resp) {
                    app.films = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load films");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('../api/v1/films/' + id)
                        .then(function (resp) {
                            app.films.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete film");
                        });
                }
            }
        }
    }
</script>

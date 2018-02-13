<template>
  <div>
  	<article class="col-md-3" v-for="film, index in films">
		<img v-bind:src="film.photo" />
        <h4><strong><a v-bind:href="'films/' + film.slug">{{ film.name }}</a></strong></h4>
        <div class="description">{{ film.description }}</div>
        <hr>
        <div><b>Release date: </b> {{ film.realease_at }}</div>
        <div><b>Rating: </b>
			<span class="rating" v-for="n in 5" v-if="n < film.rating">
			    <span class="fa fa-star checked"></span>
			</span>
		</div>
        <div><b>Ticket price: </b>{{ film.ticket_price }}</div>
        <div><b>Country: </b>{{ film.country }}</div>
        <div class="genre-tags">
        	<span class="genre-tag label label-default" v-for="genre, index in film.genres">{{ genre.title }}</span>
        </div>
        <!-- comment modal -->
        <button type="button" class="btn btn-info btn-comment" data-toggle="modal" :data-target="'#myModal'+film.id">Add Comment <span class="badge" v-if="film.comments.length > 0">{{ film.comments.length }}</span></button>
        <!-- Modal -->
		<div :id="'myModal'+film.id" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Add Your Comment Here</h4>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="/films/comment" accept-charset="UTF-8" id="frm-comment" name="frm-comment">
                        <div class="row">
	                        <div class="col-xs-8 form-group"> 
	                            <label class="control-label">Your Name <span style="color: red">*</span></label>
	                            <input type="text" name="name" class="form-control" placeholder="Your Name">
	                        </div>
                    	</div>
                        <div class="row">
                        	<div class="col-xs-8 form-group">
	                            <label for="inp-one">Comment <span style="color: red">*</span></label>
	                            <div class="textarea-side">
	                                <textarea class="form-control" name="comment" id="" cols="30" rows="10" placeholder="Enter a Message... (Required)"></textarea>
	                            </div>
	                        </div>
                        </div>
                        <input type="hidden" name="id" :value="film.id" />
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
		      </div>
		      <div class="modal-footer">
		      </div>
		    </div>
		  </div>
		</div>
        <!-- end Modal -->
	</article>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                films: [],
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
        }
    }
</script>

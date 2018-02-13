@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard | <a href="/films">Films</a></div>
            </div>
        </div>
    </div>
    <div class="row">
	  <div>
	  	<article>
	  		<div class="col-md-4">
				<img src="/{{ $film->photo }}" />
			</div>
			<div class="col-md-48">
		        <h4><strong>{{ $film->name }}</strong></h4>
		        <div class="description">{{ $film->description }}</div>
		        <hr>
		        <div><b>Release date: </b> {{ $film->realease_at }}</div>
		        <div><b>Rating: </b>
					<span class="rating">
						<?php for ($i = 0; $i < $film->rating; $i++) : ?>
							<span class="fa fa-star checked"></span>
						<?php endfor; ?>
					</span>
				</div>
		        <div><b>Ticket price: </b>{{ $film->ticket_price }}</div>
		        <div><b>Country: </b>{{ $film->country }}</div>
		        <div class="genre-tags">
		        	<?php foreach ($film->genres as $genre) : ?>
		        		<span class="genre-tag label label-default"> {{ $genre->title }}</span>
		        	<?php endforeach; ?>
		        </div>
		     </div>
		</article>
	    </div>
    </div>
</div> 
@endsection

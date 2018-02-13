<?php

use Illuminate\Database\Seeder;
use App\Repositories\FilmRepository;
use App\Film;
use App\Comment;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$film = FilmRepository::create([
            'name' 			=> 'The Fountain',
            'description' 	=> 'As a modern-day scientist, Tommy is struggling with mortality, desperately searching for the medical breakthrough that will save the life of his cancer-stricken wife, Izzi.',
            'realease_at' 	=> '2006-10-25',
            'rating'      	=> 4,
            'ticket_price'	=> 49.95,
            'country' 		=> 'USA',
            'photo' 		=> 'images/fountain.jpg',
			'genre' 		=> 'Drama,Sci-Fi'
       ]);
       
       $film = FilmRepository::create([
       		'name' 			=> 'Inception',
       		'description' 	=> 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.',
       		'realease_at' 	=> '2010-05-16',
       		'rating'      	=> 5,
       		'ticket_price'	=> 51.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/inception.jpg',
       		'genre' 		=> 'Action,Adventure,Sci-Fi'
       ]);
       
       $film = FilmRepository::create([
       		'name' 			=> 'Léon: The Professional',
       		'description' 	=> 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin trade.',
       		'realease_at' 	=> '1994-08-18',
       		'rating'      	=> 4,
       		'ticket_price'	=> 35.50,
       		'country' 		=> 'French',
       		'photo' 		=> 'images/leon.jpg',
       		'genre' 		=> 'Crime,Drama,Thriller'
       ]);
       
       $film = FilmRepository::create([
       		'name' 			=> 'The Notebook',
       		'description' 	=> 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.',
       		'realease_at' 	=> '2004-03-24',
       		'rating'      	=> 3,
       		'ticket_price'	=> 25.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/notebook.jpg',
       		'genre' 		=> 'Drama,Romance'
       ]);
       
       $film = FilmRepository::create([
       		'name' 			=> 'The Fountain-',
       		'description' 	=> 'As a modern-day scientist, Tommy is struggling with mortality, desperately searching for the medical breakthrough that will save the life of his cancer-stricken wife, Izzi.',
       		'realease_at' 	=> '2006-10-25',
       		'rating'      	=> 4,
       		'ticket_price'	=> 49.95,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/fountain.jpg',
       		'genre' 		=> 'Drama,Sci-Fi'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'Inception-',
       		'description' 	=> 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.',
       		'realease_at' 	=> '2010-05-16',
       		'rating'      	=> 5,
       		'ticket_price'	=> 51.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/inception.jpg',
       		'genre' 		=> 'Action,Adventure,Sci-Fi'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'Léon: The Professional-',
       		'description' 	=> 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin trade.',
       		'realease_at' 	=> '1994-08-18',
       		'rating'      	=> 4,
       		'ticket_price'	=> 35.50,
       		'country' 		=> 'French',
       		'photo' 		=> 'images/leon.jpg',
       		'genre' 		=> 'Crime,Drama,Thriller'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'The Notebook-',
       		'description' 	=> 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.',
       		'realease_at' 	=> '2004-03-24',
       		'rating'      	=> 3,
       		'ticket_price'	=> 25.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/notebook.jpg',
       		'genre' 		=> 'Drama,Romance'
       ]);
       
       $film = FilmRepository::create([
       		'name' 			=> 'The Fountain.',
       		'description' 	=> 'As a modern-day scientist, Tommy is struggling with mortality, desperately searching for the medical breakthrough that will save the life of his cancer-stricken wife, Izzi.',
       		'realease_at' 	=> '2006-10-25',
       		'rating'      	=> 4,
       		'ticket_price'	=> 49.95,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/fountain.jpg',
       		'genre' 		=> 'Drama,Sci-Fi'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'Inception.',
       		'description' 	=> 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.',
       		'realease_at' 	=> '2010-05-16',
       		'rating'      	=> 5,
       		'ticket_price'	=> 51.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/inception.jpg',
       		'genre' 		=> 'Action,Adventure,Sci-Fi'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'Léon: The Professional.',
       		'description' 	=> 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin trade.',
       		'realease_at' 	=> '1994-08-18',
       		'rating'      	=> 4,
       		'ticket_price'	=> 35.50,
       		'country' 		=> 'French',
       		'photo' 		=> 'images/leon.jpg',
       		'genre' 		=> 'Crime,Drama,Thriller'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'The Notebook.',
       		'description' 	=> 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.',
       		'realease_at' 	=> '2004-03-24',
       		'rating'      	=> 3,
       		'ticket_price'	=> 25.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/notebook.jpg',
       		'genre' 		=> 'Drama,Romance'
       ]);
       
       $film = FilmRepository::create([
       		'name' 			=> 'The Fountain..',
       		'description' 	=> 'As a modern-day scientist, Tommy is struggling with mortality, desperately searching for the medical breakthrough that will save the life of his cancer-stricken wife, Izzi.',
       		'realease_at' 	=> '2006-10-25',
       		'rating'      	=> 4,
       		'ticket_price'	=> 49.95,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/fountain.jpg',
       		'genre' 		=> 'Drama,Sci-Fi'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'Inception..',
       		'description' 	=> 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.',
       		'realease_at' 	=> '2010-05-16',
       		'rating'      	=> 5,
       		'ticket_price'	=> 51.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/inception.jpg',
       		'genre' 		=> 'Action,Adventure,Sci-Fi'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'Léon: The Professional..',
       		'description' 	=> 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin trade.',
       		'realease_at' 	=> '1994-08-18',
       		'rating'      	=> 4,
       		'ticket_price'	=> 35.50,
       		'country' 		=> 'French',
       		'photo' 		=> 'images/leon.jpg',
       		'genre' 		=> 'Crime,Drama,Thriller'
       ]);
        
       $film = FilmRepository::create([
       		'name' 			=> 'The Notebook..',
       		'description' 	=> 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.',
       		'realease_at' 	=> '2004-03-24',
       		'rating'      	=> 3,
       		'ticket_price'	=> 25.50,
       		'country' 		=> 'USA',
       		'photo' 		=> 'images/notebook.jpg',
       		'genre' 		=> 'Drama,Romance'
       ]);
       
       $films = Film::all();
       foreach ($films as $film) {
			$comment = new Comment();
       		$comment->name = 'person ' . $film->id;
       		$comment->comment = 'comment for ' . $film->name;
       		$film->comments()->save($comment);
       }
       
       
    }
}

<?php
namespace App\Repositories;

use App\Film;
use App\Genre;

class FilmRepository {
    protected $model;
    
    public function __construct(Film $model)
    {
        $this->model = $model;
    }
    
    /**
     * Create a new film.
     *
     * @param array $attributes
     *
     * @return App\Film
     */
    public static function create(array $attributes)
    {
        // create or update film genres seperated by comma
        if (isset($attributes['genre'])) {
            $genres = explode(',', $attributes['genre']);
            $genreIds = [];
            foreach ($genres as $title) {
                $genreIds[] = Genre::firstOrCreate(['title' => trim($title)])->id;
            }
            unset($attributes['genre']);
        }

        $film = Film::create($attributes);
        if ($film && !empty($genreIds)) {
            $film->genres()->sync($genreIds);
        }
        return $film;
    }
    
    /**
     * Update a film.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return App\Film
     */
    public static function update($id, array $attributes)
    {
        // create or update film genres seperated by comma
        if (isset($attributes['genre'])) {
            $genres = explode(',', $attributes['genre']);
            $genreIds = [];
            foreach ($genres as $title) {
                $genreIds[] = Genre::firstOrCreate(['title' => trim($title)])->id;
            }
            unset($attributes['genre']);
        }

        $film = Film::find($id);
        $film->update($attributes);
        if ($film && !empty($genreIds)) {
            $film->genres()->sync($genreIds);
        }
        return $film;
    }
    
}
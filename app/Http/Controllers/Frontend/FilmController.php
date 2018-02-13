<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Film;
use App\Comment;

class FilmController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('CheckRegistered', ['only' => ['manage']]);
	}
	
	/**
	 * Show all films
	 * 
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */
    public function index ()
    {
        return view('frontend.film.index');
    }
    
    /**
     * Link to manage resource
     */
    public function manage ()
    {
        return view('frontend.film.manage');
    }
    
    /**
     * Get id and slug and show film if exist
     * 
     * @param string $id
     * @param string $slug
     */
    public function show ($id, $slug)
    {
    	// @todo: change the response to handle error now I return all for checking
    	$film = Film::with('genres')->with('comments')->find($id);
    	
    	// return 404 error page if film not found
    	if (!$film) {
    		return abort(404);
    	}
    	
    	if (str_slug($film->name) != $slug) {
    		return abort(404);
    	}
    	
    	return view('frontend.film.item')->with('film', $film);
    }
    
    /**
     * Add comment for film by film id
     * 
     * @param integer $id
     */
    public function comment(Request $request)
    {
    	$input = $request->all();
    	$film = Film::with('genres')->find($input['id']);
    	$comment = new Comment();
    	$comment->name = $input['name'];
    	$comment->comment = $input['comment'];
    	$film->comments()->save($comment);
    	return redirect()->route('index.films');
    }
}

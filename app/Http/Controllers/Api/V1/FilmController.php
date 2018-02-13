<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Film;
use App\Http\Requests\FilmRequest;
use ValidatesRequests;
use Validator;
use App\Genre;
use App\Repositories\FilmRepository;

class FilmController extends Controller
{
    /*
     * Rules for checking request validation
     */
    protected $_rules = [
        'name'			=> 'required|string|unique:films|max:100',
        'description' 	=> 'required|string',
        'realease_at'	=> 'required|date',
        'rating'		=> 'required|integer|between:1,5',
        'ticket_price'	=> 'required|numeric|between:0,999.99',
        'country'		=> 'required|string|max:100',
        'genre'			=> 'required|string|max:250'
    ];
    
    /**
     * List all films
     * 
     * @return \Illuminate\Http\JsonResponse
     */
	public function index()
	{
	    // @todo: change the response to handle error now I return all for checking
	    $films = Film::with('genres')->with('comments')->get();
	    
	    // add url slug to each film
	    $films->map(function ($slug) {
	    	$slug['slug'] = $slug->id . '-' . str_slug($slug->name);
	    	return $slug;
	    });
	    return response()->json(
	        $films,
	        200
	    );
	}
	
	/**
	 * Show film by id
	 * 
	 * @param integer $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
	    // @todo: change the response to handle error now I return all for checking
	    $data = Film::with('genres')->find($id);
        
	    // create genre in string format seperated by comma ,
	    $fgenres = [];
	    foreach ($data->genres as $genre) {
	        $fgenres[]  = $genre->title;
	    }
	    $fgenres = implode(',', $fgenres);
        unset($data->genres);
        $data->genre = $fgenres;
        
	    return response()->json($data, 200);
	}
	
	/**
	 * Create new film
	 * 
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), $this->_rules);
		
		if($validator->fails()){
			return response()->json($validator->messages(), 422);
		}
		
		if ($request->hasFile('photo')) {
			$photo = $request->photo;
			$destinationPath = public_path(). '/images/';
			$filename = $photo->getClientOriginalName();
			$photo->move($destinationPath, $filename);
		}
		$input = $request->all();
		$input['photo'] = 'images/' . $filename;
		
		$film = FilmRepository::create($input);
		
		// @todo: change the response to handle error now I return all for checking
		return response()->json([
		    'data' => $film
		], 200);
	}
	
	/**
	 * Update existing film by id
	 * 
	 * @param Request $request
	 * @param integer $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update(Request $request, $id)
	{
	    //remove checking for unique in film name
	    $rules = $this->_rules;
	    $rules['name'] = 'required|string|max:100';
	    $validator = Validator::make($request->all(), $rules);

	    if($validator->fails()){
	        return response()->json($validator->messages(), 422);
	    }
	    
	    $film = FilmRepository::update($id, $request->all());
	    
	    // @todo: change the response to handle error now I return all for checking
	    return response()->json([
	        'data' => $film
	    ], 200);
	}
	
	/**
	 * Delete film by id
	 * 
	 * @param Request $request
	 * @param string $id
	 * @return http code
	 */
	public function delete(Request $request, $id)
	{
	    // @todo: return error if film not found
	    $film = Film::findOrFail($id);
	    if ($film->delete()) {
	        $film->genres()->detach();
	    }
	    return response()->json(true, 200);
	}
	
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'			=> 'required|string|unique:films|size:100',
    		'description ' 	=> 'required|string',
        	'realease_at'	=> 'required|date',
        	'rating'		=> 'digits_between:1,5',
        	'ticket_price'	=> 'required|between:0,999.99',
        	'country'		=> 'required|string|size:100',
        	'photo'			=> 'required|string|size:250'
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArtistRequest extends Request
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
            //
			'artistName' => 'required',
			'artistDescription' => 'required',
			'slug' => 'required|unique:artist,slug', //look into the artist table and see if slug is unique or not
			'genre' => 'required',
			'imageFile' => 'required'
        ];
    }
}

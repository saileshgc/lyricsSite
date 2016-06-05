<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAlbumRequest extends Request
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
			'albumName' => 'required',
			'artist'=> 'required|not_in:0',
			'slug' => 'required|unique:album,slug', //look into the album table and see if slug is unique or not
			'year' =>'required',
			'imageFile'=>'required'			
        ];
    }
}

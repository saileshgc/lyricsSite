<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSongRequest extends Request
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
			'artist' => 'required',
			'album'=> 'required',
			'songTitle' => 'required', //look into the album table and see if slug is unique or not
			'slug' =>'required',
			'lyrics'=>'required',
			'rating'=>'required'		
        ];
    }
}

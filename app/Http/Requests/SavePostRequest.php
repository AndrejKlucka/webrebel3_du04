<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Napísal tento príspevok prihlasený autor?
        // $post->user_id == \Auth::id();
        // Je používatel prihlasený?
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:200|not_in:create,edit,import', 
            'text' => 'required|string|min:60', 
            'tags' => 'array'
        ];
    }
}

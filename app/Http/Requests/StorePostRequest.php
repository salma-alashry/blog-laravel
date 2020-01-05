<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StorePostRequest extends FormRequest
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
            'title' => 'required','min:3','unique:posts,title'.$this->id . ',user_id', //fadel elunique
            'content' => 'required|min:10', //'unique:users,email_address' bta3et el uni
            //'required|unique:users,email,'.$this->id . ',user_id';
        ];
    }
}

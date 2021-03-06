<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeLecturer extends FormRequest
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
            'f_name' => 'required',
            'l_name'=> 'required',
            'phone_no'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'password'=>'required',
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ];

       
       
        
    }
}

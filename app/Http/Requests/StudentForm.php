<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentForm extends FormRequest
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
            'name'  => 'required|min:3',
            'email' => 'required|email|unique:students,email',
            'dep'   => 'required',
            'age'   => 'required|digits:2',
            'school_id' => 'required',
            'status' => 'required',
        ];
    }
}

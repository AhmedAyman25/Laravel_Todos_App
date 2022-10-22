<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class inputsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:5|max:15|unique:todos,name',
        'description'=>'required|max:250'
        ];
    }
    public function messages()
    {
        return[
        'name.required' => 'Todo name is required',
        'name.min' => 'Todo name less than 5 characters',
        'name.max' => 'Todo name greater than 15 characters',
        'name.unique' => 'sorry!! This name taken before',
        'description.required' => 'Todo Details is required',
        'description.max' => 'Todo Details greater than 250 characters',
        ];
    }
}

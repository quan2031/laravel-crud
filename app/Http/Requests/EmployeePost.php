<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeePost extends FormRequest
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
            "firstName" => "required",
            "lastName" => "required",
            "birthDate" => "required",
            "gender" => "required",
        ];
    }

    public function messages(){
        return [
            "firstName.required" => "名は必須です。",
            "lastName.required" => "性は必須です。",
            "birthDate.required" => "生年月日は必須です。",
            "gender.required" => "性別は必須です。",
        ];
    }
}

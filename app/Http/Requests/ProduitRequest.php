<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            "name" =>['required', 'string', 'max:255'],
            "description" =>['required', 'string', 'max:255'],
            "prix" =>['required', 'numeric'],
            "cate_id" =>['nullable', 'numeric', 'digits:1'],
        ];
        if($this->getMethod() == "POST")
        {
           $rules += [
            "cover" => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            ];
        }
        if($this->getMethod() == "PUT")
        {
           $rules += [
            "cover" => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
            ];
        }




        return $rules;
    }
    public function messages()
    {
        return [
            "required" => "Ce champ est nécessaire",
        ];
    }
}

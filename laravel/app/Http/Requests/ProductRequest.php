<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required|min:5',
            'description'=>'required|min:25',
            'quantity'=>'required|numeric',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=>'required|numeric'
        ];
    }
}

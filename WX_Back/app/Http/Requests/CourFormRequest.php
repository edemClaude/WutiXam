<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'description' => 'required',
            'price' => 'required',
            'date_creation' => 'required',
            'status' => 'required',
            'isFree' => 'required',
        ];
    }
}

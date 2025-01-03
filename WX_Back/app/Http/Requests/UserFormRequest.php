<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required|exists:roles,id',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'tel' => 'required|numeric',
            'adresse' => 'required',
            'grade' => 'string',
            'specialite' => 'string',
            'status' => 'string',
        ];
    }
}

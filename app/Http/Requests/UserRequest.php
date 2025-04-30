<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string'], 
            'photo' => ['nullable', 'image', 'max:2048'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            'phone' => ['required', 'regex:/^[0-9]{10}$/'], // Validez que le numéro de téléphone est composé de 10 chiffres
            'password' => ['required', 'string', 'min:6'],
            'address' => ['required', 'string'], 
            'city' => ['required', 'string'], 
            'state' => ['required', 'string'], 
            'zip' => ['required', 'string'], 
        ];
        
    }
}

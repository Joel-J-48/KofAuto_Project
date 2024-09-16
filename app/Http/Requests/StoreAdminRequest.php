<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'fullName_admin'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:8|confirmed',
            'role'=>'required|string|max:255|',
            'phone'=>'required|unique|phone:AUTO',
        ];
    }

    public function messages()
    {
        return [
            'fullName_admin.required'=>'le nom est obligatoire.',
            'fullName_admin.string'=>'le nom est une chaîne de caractère.',
            'fullName_admin.max'=>'le nom doit contenir au moins 255 caractères.',
            'email.required'=>'l\'adresse e-mail est obligatoire.',

            'email.email' => 'Veuillez fournir une adresse e-mail valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',

            'password.required' => 'Le mot de passe est obligatoire.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            
            'role.required' => 'Le rôle est obligatoire.',
            'role.string' => 'Le rôle doit être une chaîne de caractères.',
            'role.max' => 'Le rôle ne peut pas dépasser 255 caractères.',
            
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'phone.unique' => 'Le numéro de téléphone est déjà utilisé.',
            'phone.phone' => 'Le numéro de téléphone n\'est pas valide pour le pays spécifié.',
        ]; 
    }
}

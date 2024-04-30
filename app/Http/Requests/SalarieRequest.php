<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalarieRequest extends FormRequest
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

            'nom' => ['required'],
            'prenom' => ['required'],
            'cin' => ['required'],
            'sex' => ['required'],
            'age' => 'required|integer|min:20|max:100',
            'situation_familialle' => ['required'],
            'nbre_enfant' => 'required|integer', 
            'image' => ['mimes:jpeg,png,jpg,gif|max:2048'],
    
            'departement' => ['required'],
            'mission' => ['required'],
            'date_entree' => ['required'],
            'salaire_initial' => 'required|integer',
            'salaire_actuel' => 'required|integer',
    
            'num_cnss' => ['required'],
            'num_amo' => ['required'],
            'num_cimr' => ['required'],
            
            'ville' => ['required'],
            'adresse' => ['required'],
    
            'email' => ['required', 'email', 'unique:salaries,email'],
            'password' => ['required', 'min:6', 'max:20'],
        ];
    }
}

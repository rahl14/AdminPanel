<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la empresa es obligatorio.',
            'name.string' => 'El nombre de la empresa debe ser texto.',
            'name.max' => 'El nombre de la empresa no debe exceder los 255 caracteres.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'email.max' => 'El correo electrónico no debe exceder los 255 caracteres.',
            'logo.image' => 'El archivo debe ser una imagen.',
            'logo.mimes' => 'Los tipos de archivo permitidos para el logo son: jpeg, png, jpg, gif.',
            'logo.max' => 'El tamaño máximo del logo es de 2MB.',
            'logo.dimensions' => 'El logo debe tener dimensiones mínimas de 100x100 píxeles.',
            'website.url' => 'La página web debe ser una URL válida.',
            'website.max' => 'La página web no debe exceder los 255 caracteres.',
        ];
    }
}

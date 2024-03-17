<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Aquí puedes definir la lógica para autorizar o denegar la solicitud.
        // Por ejemplo, si solo los administradores pueden agregar roles, puedes verificar el rol del usuario actual.
        return true; // Cambia a `return auth()->user()->isAdmin();` u otra lógica según tus necesidades.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100|unique:roles,name',
            'description' => 'nullable|string', // Aquí puedes agregar más reglas de validación según tus requisitos.
        ];
    }
}

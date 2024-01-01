<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpresionRequest extends FormRequest
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
        $expresion = $this->route('expresion');
        $accesorioId=$expresion->accesorio->id;

        return [
            //
            'nombre'=> 'required|max:100|unique:accesorios,nombre,'.$accesorioId,
            'image'=> 'image|mimes:png,jpg,jpeg|max:2048'
            
        ];
    }
}

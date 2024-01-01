<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGatoRequest extends FormRequest
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
        $gato= $this->route('gato');
        return [
            //
            'name'=>'required|max:7',
            'gafas_id'=>'required|integer|exists:gafas,id',
            'color_id'=>'required|integer|exists:colors,id',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'client_id' => 'required|numeric',
            'street' => 'required|string',
            'number' => 'required|numeric',
            'district' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'complement' => 'string',
            'zip_code' => 'required|string|min:8|max:10',
        ];
    }
}

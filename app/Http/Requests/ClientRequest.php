<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
                'document' => "required|string|min:14|max:18|unique:clients",
                'corporate_name' => "required|min:3|unique:clients",
                'name' => "required|min:3|max:255",
                'phone' => "required|min:13|max:14"
        ];
    }
}

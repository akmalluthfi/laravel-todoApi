<?php

namespace App\Http\Requests;

use App\Http\Requests\Api\JsonRequest;

class LoginUserRequest extends JsonRequest
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
            'email' => 'required|email:dns',
            'password' => 'required'
        ];
    }
}

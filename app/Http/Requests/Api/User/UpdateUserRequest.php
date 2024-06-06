<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => ['required','string','max:255',],
            'email' => ['required','string','email:rfc,dns','max:255','unique:users,email,' . $this->user->id],
            'password' => ['nullable','string','min:8'],
            'role' => ['required','exists:roles,id'],
        ];
    }
}
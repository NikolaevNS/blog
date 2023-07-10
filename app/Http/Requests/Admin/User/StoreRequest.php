<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Только строковые значения',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Только строковые значения',
            'email.email' => 'Почта должна соответствовать формату mail@mail.com',
            'email.unique' => 'Данная почта уже используется',
            'password.required' => 'Это поле необходимо для заполнения',
            'password.string' => 'Только строковые значения',
        ];
    }
}
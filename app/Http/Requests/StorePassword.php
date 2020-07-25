<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePassword extends FormRequest
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
     * バリデーション：パスワード
     */
    public function rules()
    {
        return [
            'current_password' => 'required|password',
            'password' => 'required|string|min:8|max:16|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'password' => '現在のパスワードが一致していません',
        ];
    }
}

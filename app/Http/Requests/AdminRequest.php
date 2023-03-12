<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name'                  => 'required|min:4',
            'username'              => 'required',
            'email'                 => 'required',
            'password'              => 'required',
            'images'                => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'              => 'Masukkan Nama Lengkap Anda !',
            'name.min'                   => 'Nama minimal 4 karakter !',

            'username.required'          => 'Masukkan Username Anda !',
            'email.required'             => 'Masukkan Email Anda !',
            'password.required'          => 'Masukkan Password Anda !',
            'images.required'            => 'Masukkan Foto Anda !',
        ];
    }
}

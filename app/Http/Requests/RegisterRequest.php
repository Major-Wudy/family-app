<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'forename' => 'required',
            'surname' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role' => 'required',
        ];
    }

    /**
     * @author Raphael Wudy (raphael.wudy94@web.de) alias Major-Wudy
     * 
     *  @return array<string, mixed>
     */
    public function messages() {
        return [
            'forename.required' => __('register.forename-required'),
            'surname.required' => __('register.surname-required'),
            'email.required' => __('register.email-required'),
            'password.required' => __('register.password-required'),
            'role.required' => __('register.role-required'),
        ];
    }
}

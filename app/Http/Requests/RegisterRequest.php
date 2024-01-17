<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'image'=>'required|image',
            'firstname'=>'required|max:255|min:2',
            'lastname'=>'required|max:255|min:2',
            'firstname_en'=>'required|max:255|min:2',
            'lastname_en'=>'required|max:255|min:2',
            'gender'=>'required|in:ชาย,หญิง',
            'birthday'=>'required|date',
            'email'=>'required|email|unique:students,email',
            'phone'=>'required|max:20|min:10',
            'student_code'=>'required|max:13|min:13|unique:students,student_code',
            'password'=>'required|confirmed|min:6',
        ];
    }
}

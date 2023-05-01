<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|max:20',
            'email' => 'required|email' ,
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب' ,
            'name.string'=>'يجب أن يحتوي على محارف فقط',
            'name.max'=>'يجب أن تكون 20 حرف على الأكثر ',
            'email.email' => 'يجب أن يكون الايميل صحيح' ,
            'password.min'=>'يجب أن تكون 8 أحرف على الأقل ',
        ];
    }
}

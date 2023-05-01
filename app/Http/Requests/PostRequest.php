<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'photo'=>'required|mimes:jpg,jpeg,png',
            'title'=>'required|string|max:15',
            'description' => 'required|string|max:20' ,
            'date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب' ,
            'string'=> 'يجب أن يحتوي على محارف فقط',
            'photo.mimes'=> ' jpg,jpeg,png يجب أن تكون الصورة بإحدى الصيغ التالية ',
            'title.max'=> 'يجب أن تكون 150 حرف على الأكثر ',
            'description.max'=> 'يجب أن تكون 255 حرف على الأكثر ',
        ];
    }
}

<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->isMethod('post')) {
            return [
                'teacher_name' => 'required|max:120|min:5|regex:/^[ا-ی\-۰-۹ء-ي ]+$/u',
                'teacher_phone' => 'required|digits:11',
                'image' => 'nullable|image|mimes:png,jpg,jpeg',
                'teacher_description' => 'required|max:400|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            ];
        }else {
            return [
                'teacher_name' => 'required|max:120|min:5|regex:/^[ا-ی\-۰-۹ء-ي ]+$/u',
                'teacher_phone' => 'required|digits:11',
                'image' => 'nullable|image|mimes:png,jpg,jpeg',
                'teacher_description' => 'required|max:400|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            ];
        }
    }
}

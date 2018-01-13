<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dang_ky_uu_daiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'ten'=>'required',
            'sdt'=>'required'
        ];
    }
    public function messages(){
        return [
            'ten.required'=>'Bạn chưa nhập họ tên',
            'sdt.required'=>'Bạn chưa nhập số điện thoại'
        ];
    }
}

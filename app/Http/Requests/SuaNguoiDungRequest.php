<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaNguoiDungRequest extends FormRequest
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
        if ($this->checkpassword == "on") {
            return [
                'hoten'=>'required',
                'sodienthoai'=>'required|numeric|min:0',
                'password'=>'required|min:6|max:30',
                'passwordAgain' =>'required|same:password',
                'diachi'=>'required',
                'namsinh'=>'required|numeric|min:1900|max:2018',
                'gioitinh'=>'required',

            ];   
        }else{
            return[
                'hoten'=>'required',
                'sodienthoai'=>'required|numeric|min:0',
                'diachi'=>'required',
                'namsinh'=>'required|numeric|min:1900|max:2018',
                'gioitinh'=>'required',
                'diachi.required'=>'Nhập địa chỉ',
                'namsinh.required'=>'Nhập năm sinh',
                'namsinh.numeric'=>'Nhập vào 1 số',
                'namsinh.min'=>'Năm sinh phải >=1900',
                'namsinh.max'=>'Năm sinh phải <= 2018',
            ];
        }    
    }

    public function messages()
    {
        return [
            'hoten.required'=>'Nhập họ tên',
            'sodienthoai.required'=>'Nhập số điện thoại',
            'sodienthoai.numeric'=>'Số điện thoại phải là 1 dãy số',
            'sodienthoai.min'=>'Số điện thoại phải là dãy không âm',
            'password.required' => 'Nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiêu 6 kí tự',
            'password.max' => 'Mật khẩu tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Xác nhận mật khẩu không đúng',  
        ];
    }
}

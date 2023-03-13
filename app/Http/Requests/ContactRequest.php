<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'gender_id' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|max:8|min:8',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => '苗字を入力してください',
            'lastname.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力して下さい',
            'postcode.min' => 'ハイフン込みの半角8文字で入力して下さい',
            'postcode.max' => 'ハイフン込みの半角8文字で入力して下さい',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力して下さい',
            'opinion.max' => '120文字以内で入力して下さい'
        ];
    }
}

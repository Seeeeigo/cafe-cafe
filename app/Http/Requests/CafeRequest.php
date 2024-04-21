<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CafeRequest extends FormRequest
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
            //ここにバリデーションルールを記載する
            'name' => 'required | string | max:50',
            'kana' => 'required | string | max:50',
            'tel' => 'nullable | regex:/^0[0-9]{10}\z/ | max:11',
            'email' => 'required | email | max:100',
            'body' => 'required'
        ];
    }
    public function messages() {
        return [
            // バリデーションエラーメッセージ
            'name.required' => '名前を記入してください',
            'name.string' => '名前を正しくご記入ください',
            'name.max' => '名前は50文字未満でご記入ください',
            'kana.required' => 'フリガナを記入してください',
            'kana.string' => 'フリガナを正しくご記入ください',
            'kana.max' => 'フリガナは50文字以内でご記入ください',
            'tel.regex' => '電話番号を正しくご記入ください',
            'email.required' => 'メールアドレスを記入してください',
            'email.email' => 'メールアドレスを正しくご記入ください',
            'email.max' => 'メールアドレスは100文字以下でご記入ください',
            'body.required' => 'お問い合わせ内容をご記入ください'
        ];
    }
}

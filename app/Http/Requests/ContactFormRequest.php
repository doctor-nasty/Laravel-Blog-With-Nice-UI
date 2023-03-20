<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\GoogleRecaptcha;


class ContactFormRequest extends FormRequest
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
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            // 'company' => 'required',
            // 'g-recaptcha-response' => 'required|recaptchav3:contact,0.5',
            'message' => 'required',
           'g-recaptcha-response' => ['required', new GoogleRecaptcha],
        ];
     }

     public function messages()
     {
        return [
           'g-recaptcha-response.required' => 'The Captcha is required.'
        ];
     }
}

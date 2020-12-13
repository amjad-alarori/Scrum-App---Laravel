<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnswerRequest extends FormRequest
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
            'questionId'=>['required','integer'],
            'question'.$this['questionId']=>['required','string'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'questionId.*' => 'Something went wrong, refresh the webpage and try it again.',
            'question'.$this['questionId'].'.required' => 'A answers is required.',
            'question'.$this['questionId'].'.string' => 'the answers must be a text.',
        ];
    }

}

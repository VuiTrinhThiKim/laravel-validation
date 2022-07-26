<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'     => 'bail|required|min:5',
            'content'   => 'bail|required|min:5',
            'publish'   => 'bail|integer|digits:1'
        ];
    }

    /**
     *
     * Change messages data
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'      => __(config('system.message.required')),
            'title.min'           => __('validation.min', ['numeric' => 5]),
            'content.required'    => __(config('system.message.required')),
            'content.min'         => __('validation.min', ['numeric' => 5]),
            'publish.required'    => __(config('system.message.required')),
            'publish.digits'      => __('validation.digits', ['numeric' => 7]),
        ];
    }

    /**
     *
     * Change attribute name field
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title'   => __('Title'),
            'content' => __('Content'),
            'publish' => __('Publish'),
        ];
    }
}

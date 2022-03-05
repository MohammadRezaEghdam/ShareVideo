<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateVideoRequest extends StoreVideoRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(),[

            'slug' => ['required', Rule::unique('videos')->ignore($this->video), 'alpha_dash'],

        ]);
    }
}

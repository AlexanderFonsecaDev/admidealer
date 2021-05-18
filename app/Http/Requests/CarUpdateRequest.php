<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'type' => 'string|nullable',
            'make' => 'string|nullable',
            'model' => 'string|nullable',
            'first_registration' => 'date|nullable',
            'mileage' => 'string|nullable',
            'fuel' => 'string|nullable',
            'engine_size' => 'string|nullable',
            'power' => 'string|nullable',
            'gearbox' => 'string|nullable',
            'number_seats' => 'numeric|nullable',
            'doors' => 'string|nullable',
            'color' => 'string|nullable',
            'extra' => 'string|nullable',
            'images.*' => 'mimes:png,jpeg,gif',
        ];
    }
}

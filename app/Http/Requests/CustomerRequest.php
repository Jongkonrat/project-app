<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\User;

class CustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customerName' => 'required',
            'contactFirstName' => 'required',
            'contactLastName' => 'required',
            'phone' => 'required',
            'addressLine1' => 'required',
            'addressLine2' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
            'country' => 'required'
        ];
    }
}

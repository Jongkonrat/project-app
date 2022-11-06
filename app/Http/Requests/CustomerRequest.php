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
            'contactLastName' => 'required',
            'contactFirstName' => 'required',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'addressLine1' => 'required',
            'addressLine2' => 'nullable|string',
            'city' => 'required',
            'state' => 'nullable',
            'postalCode' => 'nullable|regex:/[0-9]{5}/',
            'country' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'phone' => 'Phone should be 10-digit',
            'postalCode' => 'Postal Code should be 5-digit',
        ];
    }
}

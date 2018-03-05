<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertiesRequest extends FormRequest
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
            
            'transaction' => 'required',
            'type' => 'required',
            'cep' => 'required',
            'state' => 'required',
            'city' => 'required',
            'neighborhood' => 'required',
            'address' => 'required',
            'number' => 'required',
            'rooms' => 'required',
            'bathrooms' => 'required',
            'size' => 'required',
            'price' => 'required',
        ];
    }
}

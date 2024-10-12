<?php

namespace App\Http\Requests\Backoffice\Voucher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVoucherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('vouchers', 'name')->whereNull('deleted_at')]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Label name is required',
            'name.unique' => 'Label already exists',
        ];
    }
}

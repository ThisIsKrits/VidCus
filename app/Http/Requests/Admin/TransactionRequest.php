<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'galleries_id'    =>  'required|integer|exists:galleries,id',
            'users_id'                 =>  'required|integer|exists:users,id',
            'transaction_status'    =>  'required|string|in:Izinkan,Ditolak',
        ];
    }
}

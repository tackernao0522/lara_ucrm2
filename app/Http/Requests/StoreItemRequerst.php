<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequerst extends FormRequest
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
            'name' => ['required', 'max:255'],
            'memo' => ['max:255'],
            'price' => ['required', 'numeric'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => '商品名',
            'memo' => 'メモ',
            'price' => '商品価格'
        ];
    }
}

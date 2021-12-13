<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'orderNumber' => ['required', 'string'],
        ];
    }
}

<?php

namespace Modules\Product\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\Product\Enums\ProductTypeEnum;

class StoreProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'product_name' => [
                'required',
                'string',
            ],
            'product_type' => [
                'required',
                'string',
                Rule::in(ProductTypeEnum::values())
            ],
            'calories' => [
                'nullable',
                'integer',
            ],
            'protein' => [
                'nullable',
                'integer',
            ]
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('product-create');
    }
}

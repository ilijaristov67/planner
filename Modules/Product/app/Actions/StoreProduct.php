<?php

namespace Modules\Product\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Product\Http\Requests\Product\StoreProductRequest;
use Modules\Product\Http\Resources\Product\ProductResource;
use Modules\Product\Models\Product\Product;

class StoreProduct
{
    use AsAction;

    public function handle(StoreProductRequest $request): ProductResource
    {
        $product = Product::create($request->validated());

        return  ProductResource::make($product);
    }
}

<?php

namespace Modules\Product\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Modules\Product\Actions\StoreProduct;
use Modules\Product\Http\Requests\Product\StoreProductRequest;
use Modules\Product\Http\Resources\Product\ProductResource;

class StoreProductController extends Controller
{
    public function __invoke(StoreProductRequest $request): ProductResource
    {
        return StoreProduct::run($request);
    }
}

<?php

namespace App\Domain\Product\Actions;

use App\Domain\Product\Models\Product;

class CreateProductAction{
    public function execute($params): Product
    {
        $product = new Product;
        $product->fill($params);
        $product->save();
        return $product;
    }
}
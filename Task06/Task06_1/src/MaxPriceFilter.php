<?php

namespace App;

class MaxPriceFilter implements ProductFilteringStrategy
{
<<<<<<< HEAD
    // ===================================
    //@TODO Реализовать стратегию фильтрации по цене товара
    // ===================================
}
=======
    private $maxPrice;

    public function __construct(float $maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    public function filter(Product $product): bool
    {
        $price = isset($product->sellingPrice) ? $product->sellingPrice : $product->listPrice;
        return $price <= $this->maxPrice;
    }
}
>>>>>>> student/task06

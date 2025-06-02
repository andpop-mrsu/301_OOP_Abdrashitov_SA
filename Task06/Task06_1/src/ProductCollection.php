<?php

namespace App;

class ProductCollection
{
    private $products = array();

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection
    {
<<<<<<< HEAD
        $filteredProducts = array();
        // ===================================
        //@TODO Добавить код для фильтрации товара из $this->products в $filteredProducts,
        //@TODO используя вызов $filterStrategy->filter()
        // ===================================

        return new ProductCollection($filteredProducts);
=======
        $filteredProducts = array_filter($this->products, function ($product) use ($filterStrategy) {
            return $filterStrategy->filter($product);
        });

        return new ProductCollection(array_values($filteredProducts));
>>>>>>> student/task06
    }

    public function getProductsArray()
    {
        return $this->products;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> student/task06

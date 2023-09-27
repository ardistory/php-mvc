<?php

namespace ardiStory\Php\Mvc\Controller;

class ProductController
{
    public function categories(string $productID, string $category): void
    {
        echo "ProductID : $productID, Category : $category";
    }
}

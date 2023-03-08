<?php

declare(strict_types=1);

namespace App\Transformer;

use App\Entity\Product;

/**
 * @implements TransformerInterface<Product, string>
 */
class ProductTransformer implements TransformerInterface
{
    public function transform($input): string
    {
        return $input->getName();
    }
}

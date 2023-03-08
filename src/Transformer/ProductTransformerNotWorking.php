<?php

declare(strict_types=1);

namespace App\Transformer;

use App\Entity\Product;

/**
 * @implements TransformerInterface<Product, string>
 */
class ProductTransformerNotWorking implements \Acme\Demo\Transformer\TransformerInterface
{
    public function transform($input): string
    {
        return $input->getName();
    }
}

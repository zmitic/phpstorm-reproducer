<?php

declare(strict_types=1);

namespace App\Transformer;

use App\Entity\Product;
use App\Transformer\Model\OneLevelDeep\AbstractOneLevelDeepTransformer;

/**
 * @extends AbstractOneLevelDeepTransformer<Product, string>
 */
class ProductTransformer extends AbstractOneLevelDeepTransformer
{
    protected function transform($entity)
    {
        return $entity->getName();
    }
}

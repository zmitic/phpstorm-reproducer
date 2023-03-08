<?php

declare(strict_types=1);

namespace App\Transformer;

use App\Entity\Product;
use App\Transformer\Model\TwoLevelDeep\AbstractTwoLevelDeepTransformer;

/**
 * @extends AbstractTwoLevelDeepTransformer<Product, string>
 */
class ProductTwoLevelDeepTransformerNotWorking extends AbstractTwoLevelDeepTransformer
{
    protected function transform($entity)
    {
        return $entity->getName();
    }
}

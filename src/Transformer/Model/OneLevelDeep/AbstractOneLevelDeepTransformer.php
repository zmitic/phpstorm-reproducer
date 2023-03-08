<?php

declare(strict_types=1);

namespace App\Transformer\Model\OneLevelDeep;

/**
 * @template TIn
 * @template TOut
 */
abstract class AbstractOneLevelDeepTransformer
{
    /**
     * @param TIn $entity
     *
     * @return TOut
     */
    abstract protected function transform($entity);
}

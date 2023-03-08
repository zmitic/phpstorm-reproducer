<?php

declare(strict_types=1);

namespace App\Transformer\Model\TwoLevelDeep;

use App\Transformer\Model\OneLevelDeep\AbstractOneLevelDeepTransformer;

/**
 * @template TIn
 * @template TOut
 *
 * @extends AbstractOneLevelDeepTransformer<TIn, TOut>
 */
abstract class AbstractTwoLevelDeepTransformer extends AbstractOneLevelDeepTransformer
{
//    /**
//     * Uncomment this method, it will start working
//     * @param TIn $entity
//     *
//     * @return TOut
//     */
//    abstract protected function transform($entity);
}

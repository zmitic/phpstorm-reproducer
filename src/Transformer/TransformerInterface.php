<?php

declare(strict_types=1);

namespace App\Transformer;

/**
 * @template TIn
 * @template TOut
 */
interface TransformerInterface
{
    /**
     * @param TIn $input
     *
     * @return TOut
     */
    public function transform($input);
}

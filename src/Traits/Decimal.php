<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Decimal
{
    /**
     * Return a random float number.
     *
     * @param int<0, max>|null $nbMaxDecimals
     *
     * @example 48.8932
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function float(?int $nbMaxDecimals = null, float|int $min = 0, float|int|null $max = null): float
    {
        return $this->fakerGenerator->randomFloat($nbMaxDecimals, $min, $max);
    }

    /**
     * Return a random float number.
     *
     * @param int<0, max>|null $nbMaxDecimals
     *
     * @deprecated
     *
     * @example 48.8932
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomFloat(?int $nbMaxDecimals = null, float|int $min = 0, float|int|null $max = null): float
    {
        return $this->fakerGenerator->randomFloat($nbMaxDecimals, $min, $max);
    }
}

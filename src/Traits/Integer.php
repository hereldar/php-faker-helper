<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Integer
{
    /**
     * Returns a random integer with 0 to $nbDigits digits.
     * The maximum value returned is mt_getrandmax().
     *
     * @param int<1, max>|null $nbDigits Defaults to a random number between 1 and 9
     * @param bool $strict Whether the returned number should have exactly $nbDigits
     *
     * @example 79907610
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function integer(?int $nbDigits = null, bool $strict = false): int
    {
        return $this->fakerGenerator->randomNumber($nbDigits, $strict);
    }

    /**
     * Returns a random integer between $int1 and $int2 (any order).
     *
     * @param int $int1 default to 0
     * @param int $int2 defaults to 32 bit max integer, ie 2147483647
     *
     * @example 79907610
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function integerBetween(int $int1 = 0, int $int2 = 2147483647): int
    {
        return $this->fakerGenerator->numberBetween($int1, $int2);
    }

    /**
     * Returns a positive random integer.
     *
     * @return int<1, max>
     *
     * @example 79907610
     *
     * @psalm-suppress MixedInferredReturnType
     * @psalm-suppress MoreSpecificReturnType
     */
    public function positiveInteger(): int
    {
        // @phpstan-ignore return.type
        return $this->fakerGenerator->numberBetween(1, \PHP_INT_MAX);
    }

    /**
     * Returns a negative random integer.
     *
     * @return int<min, -1>
     *
     * @example -79907610
     *
     * @psalm-suppress MixedInferredReturnType
     * @psalm-suppress MoreSpecificReturnType
     */
    public function negativeInteger(): int
    {
        // @phpstan-ignore return.type
        return $this->fakerGenerator->numberBetween(\PHP_INT_MIN, -1);
    }

    /**
     * Returns a non-negative random integer.
     *
     * @return int<0, max>
     *
     * @example 79907610
     *
     * @psalm-suppress MixedInferredReturnType
     * @psalm-suppress MoreSpecificReturnType
     */
    public function nonNegativeInteger(): int
    {
        // @phpstan-ignore return.type
        return $this->fakerGenerator->numberBetween(0, \PHP_INT_MAX);
    }

    /**
     * Returns a non-positive random integer.
     *
     * @return int<min, 0>
     *
     * @example -79907610
     *
     * @psalm-suppress MixedInferredReturnType
     * @psalm-suppress MoreSpecificReturnType
     */
    public function nonPositiveInteger(): int
    {
        // @phpstan-ignore return.type
        return $this->fakerGenerator->numberBetween(\PHP_INT_MIN, 0);
    }

    /**
     * Returns a random integer with 0 to $nbDigits digits.
     * The maximum value returned is mt_getrandmax().
     *
     * @param int<1, max>|null $nbDigits Defaults to a random number between 1 and 9
     * @param bool $strict Whether the returned number should have exactly $nbDigits
     *
     * @deprecated
     *
     * @example 79907610
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomNumber(?int $nbDigits = null, bool $strict = false): int
    {
        return $this->fakerGenerator->randomNumber($nbDigits, $strict);
    }

    /**
     * Returns a random number between $int1 and $int2 (any order).
     *
     * @param int $int1 default to 0
     * @param int $int2 defaults to 32 bit max integer, ie 2147483647
     *
     * @deprecated
     *
     * @example 79907610
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function numberBetween(int $int1 = 0, int $int2 = 2147483647): int
    {
        return $this->fakerGenerator->numberBetween($int1, $int2);
    }
}

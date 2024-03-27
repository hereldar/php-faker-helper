<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalDigit
{
    /**
     * Returns a random number between 0 and 9.
     *
     * @param ?int<0, 9> $except
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function digit(?int $except = null): ?int
    {
        return (null === $except)
            ? $this->fakerGenerator->randomDigit()
            : $this->fakerGenerator->randomDigitNot($except);
    }

    /**
     * Returns a random number between 1 and 9.
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function positiveDigit(): ?int
    {
        return $this->fakerGenerator->randomDigitNotNull();
    }

    /**
     * Returns a random number between 0 and 9.
     *
     * @deprecated
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomDigit(): ?int
    {
        return $this->fakerGenerator->randomDigit();
    }

    /**
     * Returns a random number between 1 and 9.
     *
     * @deprecated
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomDigitNotNull(): ?int
    {
        return $this->fakerGenerator->randomDigitNotNull();
    }

    /**
     * Returns a random number between 1 and 9.
     *
     * @deprecated
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomDigitNotZero(): ?int
    {
        return $this->fakerGenerator->randomDigitNotZero();
    }

    /**
     * Generates a random digit, which cannot be $except.
     *
     * @param int<0, 9> $except
     *
     * @deprecated
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomDigitNot(int $except): ?int
    {
        return $this->fakerGenerator->randomDigitNot($except);
    }
}

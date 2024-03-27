<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Company
{
    /**
     * @return non-empty-string
     *
     * @example 'Acme Ltd'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function company(): string
    {
        return $this->fakerGenerator->company();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Ltd'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function companySuffix(): string
    {
        return $this->fakerGenerator->companySuffix();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Job'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function jobTitle(): string
    {
        return $this->fakerGenerator->jobTitle();
    }
}

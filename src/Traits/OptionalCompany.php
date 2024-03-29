<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalCompany
{
    /**
     * @return non-empty-string|null
     *
     * @example 'Acme Ltd'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function company(): ?string
    {
        return $this->fakerGenerator->company();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'Ltd'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function companySuffix(): ?string
    {
        return $this->fakerGenerator->companySuffix();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'Job'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function jobTitle(): ?string
    {
        return $this->fakerGenerator->jobTitle();
    }
}

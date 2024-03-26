<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalCompany
{
    /**
     * @return ?non-empty-string
     *
     * @example 'Acme Ltd'
     */
    public function company(): ?string
    {
        return $this->fakerGenerator->company();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'Ltd'
     */
    public function companySuffix(): ?string
    {
        return $this->fakerGenerator->companySuffix();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'Job'
     */
    public function jobTitle(): ?string
    {
        return $this->fakerGenerator->jobTitle();
    }
}

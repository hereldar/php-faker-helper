<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalPerson
{
    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return ?non-empty-string
     *
     * @example 'John Doe'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function name(?string $gender = null): ?string
    {
        return $this->fakerGenerator->name($gender);
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return ?non-empty-string
     *
     * @example 'John'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function firstName(?string $gender = null): ?string
    {
        return $this->fakerGenerator->firstName($gender);
    }

    /**
     * @return ?non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function firstNameMale(): ?string
    {
        return $this->fakerGenerator->firstNameMale();
    }

    /**
     * @return ?non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function firstNameFemale(): ?string
    {
        return $this->fakerGenerator->firstNameFemale();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'Doe'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function lastName(): ?string
    {
        return $this->fakerGenerator->lastName();
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return ?non-empty-string
     *
     * @example 'Mrs.'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function title(?string $gender = null): ?string
    {
        return $this->fakerGenerator->title($gender);
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'Mr.'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function titleMale(): ?string
    {
        return $this->fakerGenerator->titleMale();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'Mrs.'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function titleFemale(): ?string
    {
        return $this->fakerGenerator->titleFemale();
    }
}

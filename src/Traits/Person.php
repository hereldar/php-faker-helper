<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Person
{
    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return non-empty-string
     *
     * @example 'John Doe'
     */
    public function name(?string $gender = null): string
    {
        return $this->fakerGenerator->name($gender);
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return non-empty-string
     *
     * @example 'John'
     */
    public function firstName(?string $gender = null): string
    {
        return $this->fakerGenerator->firstName($gender);
    }

    /**
     * @return non-empty-string
     */
    public function firstNameMale(): string
    {
        return $this->fakerGenerator->firstNameMale();
    }

    /**
     * @return non-empty-string
     */
    public function firstNameFemale(): string
    {
        return $this->fakerGenerator->firstNameFemale();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Doe'
     */
    public function lastName(): string
    {
        return $this->fakerGenerator->lastName();
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return non-empty-string
     *
     * @example 'Mrs.'
     */
    public function title(?string $gender = null): string
    {
        return $this->fakerGenerator->title($gender);
    }

    /**
     * @return non-empty-string
     *
     * @example 'Mr.'
     */
    public function titleMale(): string
    {
        return $this->fakerGenerator->titleMale();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Mrs.'
     */
    public function titleFemale(): string
    {
        return $this->fakerGenerator->titleFemale();
    }
}

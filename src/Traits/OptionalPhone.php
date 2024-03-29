<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalPhone
{
    /**
     * @return non-empty-string|null
     *
     * @example '555-123-546'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function phoneNumber(): ?string
    {
        return $this->fakerGenerator->phoneNumber();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '+11134567890'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function e164PhoneNumber(): ?string
    {
        return $this->fakerGenerator->e164PhoneNumber();
    }

    /**
     * International Mobile Equipment Identity (IMEI).
     *
     * @see http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @see http://imei-number.com/imei-validation-check/
     *
     * @example '720084494799532'
     *
     * @return non-empty-string|null $imei
     *
     * @psalm-suppress MixedInferredReturnType
     * @psalm-suppress MoreSpecificReturnType
     */
    public function imei(): ?string
    {
        /** @psalm-suppress MixedAssignment */
        $imei = $this->fakerGenerator->imei();

        return ($imei) ? (string) $imei : null;
    }
}

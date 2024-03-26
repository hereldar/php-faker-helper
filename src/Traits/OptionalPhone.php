<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalPhone
{
    /**
     * @return ?non-empty-string
     *
     * @example '555-123-546'
     */
    public function phoneNumber(): ?string
    {
        return $this->fakerGenerator->phoneNumber();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '+11134567890'
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
     * @return ?non-empty-string $imei
     */
    public function imei(): ?string
    {
        $imei = $this->fakerGenerator->imei();

        return ($imei) ? (string) $imei : null;
    }
}

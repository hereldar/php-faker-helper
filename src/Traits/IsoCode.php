<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait IsoCode
{
    /**
     * @return non-empty-string
     *
     * @example 'fr_FR'
     */
    public function locale(): string
    {
        return $this->fakerGenerator->locale();
    }

    /**
     * @return non-empty-string
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *
     * @example 'FR'
     */
    public function countryCode(): string
    {
        return $this->fakerGenerator->countryCode();
    }

    /**
     * @return non-empty-string
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     *
     * @example 'FRA'
     */
    public function countryISOAlpha3(): string
    {
        return $this->fakerGenerator->countryISOAlpha3();
    }

    /**
     * @return non-empty-string
     *
     * @example 'fr'
     */
    public function languageCode(): string
    {
        return $this->fakerGenerator->languageCode();
    }

    /**
     * @return non-empty-string
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *
     * @example 'EUR'
     */
    public function currencyCode(): string
    {
        return $this->fakerGenerator->currencyCode();
    }
}

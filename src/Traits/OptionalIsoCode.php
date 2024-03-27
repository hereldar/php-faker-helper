<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalIsoCode
{
    /**
     * @return ?non-empty-string
     *
     * @example 'fr_FR'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function locale(): ?string
    {
        return $this->fakerGenerator->locale();
    }

    /**
     * @return ?non-empty-string
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *
     * @example 'FR'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function countryCode(): ?string
    {
        return $this->fakerGenerator->countryCode();
    }

    /**
     * @return ?non-empty-string
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     *
     * @example 'FRA'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function countryISOAlpha3(): ?string
    {
        return $this->fakerGenerator->countryISOAlpha3();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'fr'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function languageCode(): ?string
    {
        return $this->fakerGenerator->languageCode();
    }

    /**
     * @return ?non-empty-string
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *
     * @example 'EUR'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function currencyCode(): ?string
    {
        return $this->fakerGenerator->currencyCode();
    }
}

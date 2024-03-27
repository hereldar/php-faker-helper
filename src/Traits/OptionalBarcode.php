<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalBarcode
{
    /**
     * Get a random EAN13 barcode.
     *
     * @example '4006381333931'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function ean13(): ?string
    {
        return $this->fakerGenerator->ean13();
    }

    /**
     * Get a random EAN8 barcode.
     *
     * @example '73513537'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function ean8(): ?string
    {
        return $this->fakerGenerator->ean8();
    }

    /**
     * Get a random ISBN-10 code.
     *
     * @see http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @example '4881416324'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function isbn10(): ?string
    {
        return $this->fakerGenerator->isbn10();
    }

    /**
     * Get a random ISBN-13 code.
     *
     * @see http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @example '9790404436093'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function isbn13(): ?string
    {
        return $this->fakerGenerator->isbn13();
    }
}

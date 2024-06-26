<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalColor
{
    /**
     * @return non-empty-string|null
     *
     * @example '#fa3cc2'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function hexColor(): ?string
    {
        return $this->fakerGenerator->hexColor();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '#ff0044'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function safeHexColor(): ?string
    {
        return $this->fakerGenerator->safeHexColor();
    }

    /**
     * @return array{int<0, 255>, int<0, 255>, int<0, 255>}|null
     *
     * @example 'array(0,255,122)'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function rgbColorAsArray(): ?array
    {
        return $this->fakerGenerator->rgbColorAsArray();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '0,255,122'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function rgbColor(): ?string
    {
        return $this->fakerGenerator->rgbColor();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'rgb(0,255,122)'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function rgbCssColor(): ?string
    {
        return $this->fakerGenerator->rgbCssColor();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'rgba(0,255,122,0.8)'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function rgbaCssColor(): ?string
    {
        return $this->fakerGenerator->rgbaCssColor();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'blue'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function safeColorName(): ?string
    {
        return $this->fakerGenerator->safeColorName();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'NavajoWhite'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function colorName(): ?string
    {
        return $this->fakerGenerator->colorName();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '340,50,20'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function hslColor(): ?string
    {
        return $this->fakerGenerator->hslColor();
    }

    /**
     * @return array{int<0, 360>, int<0, 100>, int<0, 100>}|null
     *
     * @example [340, 50, 20]
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function hslColorAsArray(): ?array
    {
        return $this->fakerGenerator->hslColorAsArray();
    }
}

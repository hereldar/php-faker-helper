<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalColor
{
    /**
     * @return ?non-empty-string
     *
     * @example '#fa3cc2'
     */
    public function hexColor(): ?string
    {
        return $this->fakerGenerator->hexColor();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '#ff0044'
     */
    public function safeHexColor(): ?string
    {
        return $this->fakerGenerator->safeHexColor();
    }

    /**
     * @example 'array(0,255,122)'
     */
    public function rgbColorAsArray(): ?array
    {
        return $this->fakerGenerator->rgbColorAsArray();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '0,255,122'
     */
    public function rgbColor(): ?string
    {
        return $this->fakerGenerator->rgbColor();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'rgb(0,255,122)'
     */
    public function rgbCssColor(): ?string
    {
        return $this->fakerGenerator->rgbCssColor();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'rgba(0,255,122,0.8)'
     */
    public function rgbaCssColor(): ?string
    {
        return $this->fakerGenerator->rgbaCssColor();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'blue'
     */
    public function safeColorName(): ?string
    {
        return $this->fakerGenerator->safeColorName();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'NavajoWhite'
     */
    public function colorName(): ?string
    {
        return $this->fakerGenerator->colorName();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '340,50,20'
     */
    public function hslColor(): ?string
    {
        return $this->fakerGenerator->hslColor();
    }

    /**
     * @example array(340, 50, 20)
     */
    public function hslColorAsArray(): ?array
    {
        return $this->fakerGenerator->hslColorAsArray();
    }
}

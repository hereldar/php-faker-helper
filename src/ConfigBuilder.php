<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Hereldar\FakerHelper\Enums\Locale;
use Hereldar\FakerHelper\Helpers\Validate;

final class ConfigBuilder
{
    public function __construct(
        private Config $config,
    ) {}

    /**
     * @param Locale|non-empty-string $locale
     *
     * @return $this
     */
    public function defaultLocale(Locale|string $locale): self
    {
        if (\is_string($locale)) {
            Validate::locale($locale);
            $locale = Locale::from($locale);
        }

        $this->config->defaultLocale = $locale;

        return $this;
    }
}

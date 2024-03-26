<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Hereldar\FakerHelper\Enums\Locale;
use Webmozart\Assert\Assert;

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
            Assert::regex(
                value: $locale,
                pattern: '/^[a-z]{2}_(?:[A-Z][a-z]{3}_)?[A-Z]{2}$/',
                message: 'The locale should be a combination of an ISO language code and an ISO country code, separated by an underscore.'
            );
            $locale = Locale::from($locale);
        }

        $this->config->defaultLocale = $locale;

        return $this;
    }
}

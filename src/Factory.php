<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Faker\Factory as FakerFactory;
use Hereldar\FakerHelper\Enums\Locale;
use Webmozart\Assert\Assert;

final class Factory
{
    /**
     * @var array<non-empty-string, Generator>
     */
    private static array $cache = [];

    /**
     * @param Locale|non-empty-string|null $locale
     */
    public static function make(Locale|string|null $locale = null): Generator
    {
        if (null === $locale) {
            $locale = Config::defaultLocale()->value();
        } elseif ($locale instanceof Locale) {
            $locale = $locale->value();
        } else {
            Assert::regex(
                value: $locale,
                pattern: '/^[a-z]{2}_(?:[A-Z][a-z]{3}_)?[A-Z]{2}$/',
                message: 'The locale should be a combination of an ISO language code and an ISO country code, separated by an underscore.'
            );
        }

        if (isset(self::$cache[$locale])) {
            return self::$cache[$locale];
        }

        $fakerGenerator = FakerFactory::create($locale);

        return self::$cache[$locale] = new Generator($fakerGenerator);
    }
}

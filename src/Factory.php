<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Faker\Factory as FakerFactory;
use Hereldar\FakerHelper\Enums\Locale;
use Hereldar\FakerHelper\Helpers\Validate;

final class Factory
{
    /**
     * @var array<string, Generator>
     */
    private static array $cache = [];

    public static function make(Locale|string|null $locale = null): Generator
    {
        if (null === $locale) {
            $locale = Config::defaultLocale()->value;
        } elseif ($locale instanceof Locale) {
            $locale = $locale->value;
        } else {
            Validate::locale($locale);
        }

        if (isset(self::$cache[$locale])) {
            return self::$cache[$locale];
        }

        $fakerGenerator = FakerFactory::create($locale);

        return self::$cache[$locale] = new Generator($fakerGenerator);
    }
}

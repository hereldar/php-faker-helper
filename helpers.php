<?php

declare(strict_types=1);

use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;

if (!function_exists('fake')) {
    function fake(
        string $locale = FakerFactory::DEFAULT_LOCALE,
    ): FakerGenerator {
        static $cache = [];

        return $cache[$locale] ??= FakerFactory::create($locale);
    }
}

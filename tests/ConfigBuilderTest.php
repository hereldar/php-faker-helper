<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Config;
use Hereldar\FakerHelper\Enums\Locale;
use InvalidArgumentException;
use ValueError;

final class ConfigBuilderTest extends TestCase
{
    public function testDefaultLocale(): void
    {
        foreach (Locale::cases() as $locale) {
            $this->configBuilder->defaultLocale($locale);
            self::assertSame($locale, Config::defaultLocale());
        }

        foreach (Locale::values() as $locale) {
            $this->configBuilder->defaultLocale($locale);
            self::assertSame($locale, Config::defaultLocale()->value);
        }
    }

    public function testInvalidDefaultLocale(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The locale should be a combination of an ISO language code and an ISO country code, separated by an underscore.');

        $this->configBuilder->defaultLocale('invalid_locale');
    }

    public function testUnknownDefaultLocale(): void
    {
        $this->expectException(ValueError::class);
        $this->expectExceptionMessage("'uu_UU' is not a valid backing value for enum Hereldar\\FakerHelper\\Enums\\Locale");

        $this->configBuilder->defaultLocale('uu_UU');
    }
}

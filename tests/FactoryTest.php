<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Config;
use Hereldar\FakerHelper\Enums\Locale;
use Hereldar\FakerHelper\Factory;
use Hereldar\FakerHelper\Generator;
use InvalidArgumentException;

final class FactoryTest extends TestCase
{
    public function testDefaultLocale(): void
    {
        $generator1 = Factory::make();
        $generator2 = Factory::make(Config::defaultLocale());

        self::assertSame($generator1, $generator2);

        $this->configBuilder->defaultLocale(Locale::esES);
        $generator3 = Factory::make();
        $generator4 = Factory::make(Locale::esES);

        self::assertSame($generator3, $generator4);
    }

    public function testKnownLocale(): void
    {
        foreach (Locale::cases() as $locale) {
            $generator1 = Factory::make($locale);
            $generator2 = Factory::make($locale->value());

            self::assertSame($generator1, $generator2);
        }
    }

    public function testUnknownLocale(): void
    {
        $generator = Factory::make(locale: 'uu_UU');

        self::assertInstanceOf(Generator::class, $generator);
    }

    public function testInvalidLocale(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The locale should be a combination of an ISO language code and an ISO country code, separated by an underscore.');

        Factory::make(locale: 'invalid_locale');
    }
}

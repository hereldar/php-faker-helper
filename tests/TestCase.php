<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Config;
use Hereldar\FakerHelper\ConfigBuilder;
use Hereldar\FakerHelper\Enums\Locale;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    private static Locale $defaultLocale;
    protected ConfigBuilder $configBuilder;

    protected function setUp(): void
    {
        self::$defaultLocale ??= Config::defaultLocale();
        $this->configBuilder ??= Config::make();
        $this->configBuilder->defaultLocale(self::$defaultLocale);
    }

    protected function tearDown(): void
    {
        $this->configBuilder->defaultLocale(self::$defaultLocale);
    }
}

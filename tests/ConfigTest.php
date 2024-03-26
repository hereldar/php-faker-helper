<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Config;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

final class ConfigTest extends PHPUnitTestCase
{
    public function testDefaultLocale(): void
    {
        self::assertSame('en_US', Config::defaultLocale()->value());
    }
}

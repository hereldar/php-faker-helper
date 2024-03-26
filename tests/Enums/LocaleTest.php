<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests\Enums;

use DirectoryIterator;
use Hereldar\FakerHelper\Enums\Locale;
use Hereldar\FakerHelper\Tests\TestCase;

final class LocaleTest extends TestCase
{
    public function testValues(): void
    {
        $providers = new DirectoryIterator(__DIR__.'/../../vendor/fakerphp/faker/src/Faker/Provider');

        foreach ($providers as $file) {
            if ($file->isDot() || !$file->isDir()) {
                continue;
            }
            $dirname = $file->getFilename();

            self::assertContains($dirname, Locale::values());
            self::assertSame($dirname, Locale::from($dirname)->value());
            self::assertSame($dirname, Locale::tryFrom($dirname)?->value());
            self::assertSame(Locale::from($dirname), Locale::tryFrom($dirname));
        }
    }
}

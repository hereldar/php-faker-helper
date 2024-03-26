<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Hereldar\FakerHelper\Enums\Locale;

final class Config
{
    public Locale $defaultLocale;

    private static ?Config $instance = null;

    private function __construct()
    {
        $this->defaultLocale = Locale::from(Locale::enUS);
    }

    private static function instance(): self
    {
        return self::$instance ??= new self();
    }

    public static function make(): ConfigBuilder
    {
        return new ConfigBuilder(self::instance());
    }

    public static function defaultLocale(): Locale
    {
        return self::instance()->defaultLocale;
    }
}

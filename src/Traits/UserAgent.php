<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait UserAgent
{
    /**
     * Generate mac processor.
     *
     * @return non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function macProcessor(): string
    {
        return $this->fakerGenerator->macProcessor();
    }

    /**
     * Generate linux processor.
     *
     * @return non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function linuxProcessor(): string
    {
        return $this->fakerGenerator->linuxProcessor();
    }

    /**
     * Generate a random user agent.
     *
     * @return non-empty-string
     *
     * @example 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function userAgent(): string
    {
        return $this->fakerGenerator->userAgent();
    }

    /**
     * Generate Chrome user agent.
     *
     * @return non-empty-string
     *
     * @example 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function chrome(): string
    {
        return $this->fakerGenerator->chrome();
    }

    /**
     * Generate Edge user agent.
     *
     * @return non-empty-string
     *
     * @example 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36 Edg/99.0.1150.36'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function msedge(): string
    {
        return $this->fakerGenerator->msedge();
    }

    /**
     * Generate Firefox user agent.
     *
     * @return non-empty-string
     *
     * @example 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function firefox(): string
    {
        return $this->fakerGenerator->firefox();
    }

    /**
     * Generate Safari user agent.
     *
     * @return non-empty-string
     *
     * @example 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function safari(): string
    {
        return $this->fakerGenerator->safari();
    }

    /**
     * Generate Opera user agent.
     *
     * @return non-empty-string
     *
     * @example 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function opera(): string
    {
        return $this->fakerGenerator->opera();
    }

    /**
     * Generate Internet Explorer user agent.
     *
     * @return non-empty-string
     *
     * @example 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function internetExplorer(): string
    {
        return $this->fakerGenerator->internetExplorer();
    }

    /**
     * @return non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function windowsPlatformToken(): string
    {
        return $this->fakerGenerator->windowsPlatformToken();
    }

    /**
     * @return non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function macPlatformToken(): string
    {
        return $this->fakerGenerator->macPlatformToken();
    }

    /**
     * @return non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function iosMobileToken(): string
    {
        return $this->fakerGenerator->iosMobileToken();
    }

    /**
     * @return non-empty-string
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function linuxPlatformToken(): string
    {
        return $this->fakerGenerator->linuxPlatformToken();
    }
}

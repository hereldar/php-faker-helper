<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalInternet
{
    /**
     * @return ?non-empty-string
     *
     * @example 'jdoe@acme.biz'
     */
    public function email(): ?string
    {
        return $this->fakerGenerator->email();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'jdoe@example.com'
     */
    final public function safeEmail(): ?string
    {
        return $this->fakerGenerator->safeEmail();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'jdoe@gmail.com'
     */
    public function freeEmail(): ?string
    {
        return $this->fakerGenerator->freeEmail();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'jdoe@dawson.com'
     */
    public function companyEmail(): ?string
    {
        return $this->fakerGenerator->companyEmail();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'gmail.com'
     */
    public function freeEmailDomain(): ?string
    {
        return $this->fakerGenerator->freeEmailDomain();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'example.org'
     */
    final public function safeEmailDomain(): ?string
    {
        return $this->fakerGenerator->safeEmailDomain();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'jdoe'
     */
    public function userName(): ?string
    {
        return $this->fakerGenerator->userName();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'fY4èHdZv68'
     */
    public function password($minLength = 6, $maxLength = 20): ?string
    {
        return $this->fakerGenerator->password($minLength, $maxLength);
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'tiramisu.com'
     */
    public function domainName(): ?string
    {
        return $this->fakerGenerator->domainName();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'faber'
     */
    public function domainWord(): ?string
    {
        return $this->fakerGenerator->domainWord();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'com'
     */
    public function tld(): ?string
    {
        return $this->fakerGenerator->tld();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'http://www.runolfsdottir.com/'
     */
    public function url(): ?string
    {
        return $this->fakerGenerator->url();
    }

    /**
     * @return ?non-empty-string
     *
     * @example 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
     */
    public function slug($nbWords = 6, $variableNbWords = true): ?string
    {
        return $this->fakerGenerator->slug($nbWords, $variableNbWords);
    }

    /**
     * @return ?non-empty-string
     *
     * @example '237.149.115.38'
     */
    public function ipv4(): ?string
    {
        return $this->fakerGenerator->ipv4();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'
     */
    public function ipv6(): ?string
    {
        return $this->fakerGenerator->ipv6();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '10.1.1.17'
     */
    public function localIpv4(): ?string
    {
        return $this->fakerGenerator->localIpv4();
    }

    /**
     * @return ?non-empty-string
     *
     * @example '32:F1:39:2F:D6:18'
     */
    public function macAddress(): ?string
    {
        return $this->fakerGenerator->macAddress();
    }
}

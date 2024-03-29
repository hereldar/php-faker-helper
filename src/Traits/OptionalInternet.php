<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalInternet
{
    /**
     * @return non-empty-string|null
     *
     * @example 'jdoe@acme.biz'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function email(): ?string
    {
        return $this->fakerGenerator->email();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'jdoe@example.com'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function safeEmail(): ?string
    {
        return $this->fakerGenerator->safeEmail();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'jdoe@gmail.com'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function freeEmail(): ?string
    {
        return $this->fakerGenerator->freeEmail();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'jdoe@dawson.com'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function companyEmail(): ?string
    {
        return $this->fakerGenerator->companyEmail();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'gmail.com'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function freeEmailDomain(): ?string
    {
        return $this->fakerGenerator->freeEmailDomain();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'example.org'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function safeEmailDomain(): ?string
    {
        return $this->fakerGenerator->safeEmailDomain();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'jdoe'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function userName(): ?string
    {
        return $this->fakerGenerator->userName();
    }

    /**
     * @param int<1, max> $minLength
     * @param int<1, max> $maxLength
     *
     * @return non-empty-string|null
     *
     * @example 'fY4èHdZv68'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function password(int $minLength = 6, int $maxLength = 20): ?string
    {
        return $this->fakerGenerator->password($minLength, $maxLength);
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'tiramisu.com'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function domainName(): ?string
    {
        return $this->fakerGenerator->domainName();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'faber'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function domainWord(): ?string
    {
        return $this->fakerGenerator->domainWord();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'com'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function tld(): ?string
    {
        return $this->fakerGenerator->tld();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'http://www.runolfsdottir.com/'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function url(): ?string
    {
        return $this->fakerGenerator->url();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function slug(int $nbWords = 6, bool $variableNbWords = true): ?string
    {
        return $this->fakerGenerator->slug($nbWords, $variableNbWords);
    }

    /**
     * @return non-empty-string|null
     *
     * @example '237.149.115.38'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function ipv4(): ?string
    {
        return $this->fakerGenerator->ipv4();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function ipv6(): ?string
    {
        return $this->fakerGenerator->ipv6();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '10.1.1.17'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function localIpv4(): ?string
    {
        return $this->fakerGenerator->localIpv4();
    }

    /**
     * @return non-empty-string|null
     *
     * @example '32:F1:39:2F:D6:18'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function macAddress(): ?string
    {
        return $this->fakerGenerator->macAddress();
    }
}

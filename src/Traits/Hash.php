<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Hash
{
    /**
     * @return non-empty-string
     *
     * @example 'cfcd208495d565ef66e7dff9f98764da'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function md5(): string
    {
        return $this->fakerGenerator->md5();
    }

    /**
     * @return non-empty-string
     *
     * @example 'b5d86317c2a144cd04d0d7c03b2b02666fafadf2'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function sha1(): string
    {
        return $this->fakerGenerator->sha1();
    }

    /**
     * @return non-empty-string
     *
     * @example '85086017559ccc40638fcde2fecaf295e0de7ca51b7517b6aebeaaf75b4d4654'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function sha256(): string
    {
        return $this->fakerGenerator->sha256();
    }
}

<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalVersion
{
    /**
     * Get a version number in semantic versioning syntax 2.0.0 (https://semver.org/spec/v2.0.0.html).
     *
     * @param bool $preRelease Pre-release parts may be randomly included
     * @param bool $build Build parts may be randomly included
     *
     * @example 1.0.0
     * @example 1.0.0-alpha.1
     * @example 1.0.0-alpha.1+b71f04d
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function semver(bool $preRelease = false, bool $build = false): ?string
    {
        return $this->fakerGenerator->semver($preRelease, $build);
    }
}

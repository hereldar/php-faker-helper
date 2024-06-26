<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalUuid
{
    /**
     * Generate name based md5 UUID (version 3).
     *
     * @return non-empty-string|null
     *
     * @example '7e57d004-2b97-0e7a-b45f-5387367791cd'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function uuid(): ?string
    {
        return $this->fakerGenerator->uuid();
    }
}

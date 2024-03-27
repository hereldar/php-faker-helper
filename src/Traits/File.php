<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait File
{
    /**
     * Get a random MIME type.
     *
     * @example 'video/avi'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function mimeType(): string
    {
        return $this->fakerGenerator->mimeType();
    }

    /**
     * Get a random file extension (without a dot).
     *
     * @example 'avi'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function fileExtension(): string
    {
        return $this->fakerGenerator->fileExtension();
    }

    /**
     * Get a full path to a new real file on the system.
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function filePath(): string
    {
        return $this->fakerGenerator->filePath();
    }
}

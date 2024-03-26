<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalFile
{
    /**
     * Get a random MIME type.
     *
     * @example 'video/avi'
     */
    public function mimeType(): ?string
    {
        return $this->fakerGenerator->mimeType();
    }

    /**
     * Get a random file extension (without a dot).
     *
     * @example 'avi'
     */
    public function fileExtension(): ?string
    {
        return $this->fakerGenerator->fileExtension();
    }

    /**
     * Get a full path to a new real file on the system.
     */
    public function filePath(): ?string
    {
        return $this->fakerGenerator->filePath();
    }
}

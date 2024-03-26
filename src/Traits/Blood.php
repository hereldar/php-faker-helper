<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Blood
{
    /**
     * Get an actual blood type.
     *
     * @example 'AB'
     */
    public function bloodType(): string
    {
        return $this->fakerGenerator->bloodType();
    }

    /**
     * Get a random resis value.
     *
     * @example '+'
     */
    public function bloodRh(): string
    {
        return $this->fakerGenerator->bloodRh();
    }

    /**
     * Get a full blood group.
     *
     * @example 'AB+'
     */
    public function bloodGroup(): string
    {
        return $this->fakerGenerator->bloodGroup();
    }
}

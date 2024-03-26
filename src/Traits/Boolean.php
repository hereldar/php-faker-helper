<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Boolean
{
    /**
     * Return a boolean, true or false.
     *
     * @param int<0, 100> $chanceOfGettingTrue Between 0 (always get false) and 100 (always get true)
     *
     * @example true
     */
    public function boolean(int $chanceOfGettingTrue = 50): bool
    {
        return $this->fakerGenerator->boolean($chanceOfGettingTrue);
    }
}

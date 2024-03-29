<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Helpers;

use InvalidArgumentException;

final class Validate
{
    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function locale(string $value): void
    {
        if (!\preg_match('/^[a-z]{2}_(?:[A-Z][a-z]{3}_)?[A-Z]{2}$/', $value)) {
            throw new InvalidArgumentException('The locale should be a combination of an ISO language code and an ISO country code, separated by an underscore.');
        }
    }
}

<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Interfaces;

use Faker\ChanceGenerator as OptionalFakerGenerator;

/**
 * @internal
 */
interface OptionalGeneratorConstructor
{
    public function __construct(
        OptionalFakerGenerator $fakerGenerator,
    );
}

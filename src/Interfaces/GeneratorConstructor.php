<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Interfaces;

use Faker\Generator as FakerGenerator;
use Faker\UniqueGenerator as FakerUniqueGenerator;
use Faker\ValidGenerator as FakerValidGenerator;

/**
 * @internal
 */
interface GeneratorConstructor
{
    public function __construct(
        FakerGenerator|FakerUniqueGenerator|FakerValidGenerator $fakerGenerator,
    );
}

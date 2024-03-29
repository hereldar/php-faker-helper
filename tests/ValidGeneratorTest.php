<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Factory;
use ReflectionObject;

final class ValidGeneratorTest extends TestCase
{
    private const EXCLUDED_METHODS = [
        '__construct',
        'optional',
        'unique',
        'valid',
    ];

    public function testGeneratorMethods(): void
    {
        $generator = Factory::make();
        $generatorReflection = new ReflectionObject($generator);

        $validGenerator = $generator->valid();
        $validGeneratorReflection = new ReflectionObject($validGenerator);

        foreach ($generatorReflection->getMethods() as $method) {
            $methodName = $method->getName();

            if ($method->isStatic()
                || !$method->isPublic()
                || \in_array($methodName, self::EXCLUDED_METHODS, true)) {
                continue;
            }

            self::assertMethodExists($validGeneratorReflection, $methodName);

            if (0 === $method->getNumberOfRequiredParameters()) {
                $validGenerator->{$methodName}();
            }

            $validMethod = $validGeneratorReflection->getMethod($methodName);
            self::assertSame($method->getDocComment(), $validMethod->getDocComment());
            self::assertEquals($method->getParameters(), $validMethod->getParameters());
        }
    }
}

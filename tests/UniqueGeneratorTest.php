<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Factory;
use ReflectionObject;

final class UniqueGeneratorTest extends TestCase
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

        $uniqueGenerator = $generator->unique();
        $uniqueGeneratorReflection = new ReflectionObject($uniqueGenerator);

        foreach ($generatorReflection->getMethods() as $method) {
            $methodName = $method->getName();

            if ($method->isStatic()
                || !$method->isPublic()
                || \in_array($methodName, self::EXCLUDED_METHODS, true)) {
                continue;
            }

            self::assertMethodExists($uniqueGeneratorReflection, $methodName);

            if (0 === $method->getNumberOfRequiredParameters()) {
                $uniqueGenerator->{$methodName}();
            }

            $uniqueMethod = $uniqueGeneratorReflection->getMethod($methodName);
            self::assertSame($method->getDocComment(), $uniqueMethod->getDocComment());
            self::assertEquals($method->getParameters(), $uniqueMethod->getParameters());
        }
    }
}

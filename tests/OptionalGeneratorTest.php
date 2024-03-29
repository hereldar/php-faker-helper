<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Hereldar\FakerHelper\Factory;
use ReflectionObject;

final class OptionalGeneratorTest extends TestCase
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

        $optionalGenerator1 = $generator->optional(0);
        $optionalGenerator2 = $generator->optional(1);
        $optionalGeneratorReflection = new ReflectionObject($optionalGenerator1);

        foreach ($generatorReflection->getMethods() as $method) {
            $methodName = $method->getName();

            if ($method->isStatic()
                || !$method->isPublic()
                || \in_array($methodName, self::EXCLUDED_METHODS, true)) {
                continue;
            }

            self::assertMethodExists($optionalGeneratorReflection, $methodName);

            if (0 === $method->getNumberOfRequiredParameters()) {
                /** @psalm-suppress MixedAssignment */
                $result1 = $optionalGenerator1->{$methodName}();
                /** @psalm-suppress MixedAssignment */
                $result2 = $optionalGenerator2->{$methodName}();

                self::assertNull($result1);
                self::assertNotNull($result2);
            }

            $optionalMethod = $optionalGeneratorReflection->getMethod($methodName);
            // self::assertSame($method->getDocComment(), $optionalMethod->getDocComment());
            self::assertEquals($method->getParameters(), $optionalMethod->getParameters());
            self::assertTrue($optionalMethod->getReturnType()?->allowsNull());
        }
    }
}

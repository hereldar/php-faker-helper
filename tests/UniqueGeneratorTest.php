<?php

declare(strict_types=1);

use Hereldar\FakerHelper\Factory;
use Hereldar\FakerHelper\Tests\TestCase;

final class UniqueGeneratorTest extends TestCase
{
    public function testGeneratorMethods(): void
    {
        $generator = Factory::make();
        $generatorReflection = new ReflectionObject($generator);

        $uniqueGenerator = $generator->unique();
        $uniqueGeneratorReflection = new ReflectionObject($uniqueGenerator);

        foreach ($generatorReflection->getMethods() as $method) {
            $methodName = $method->getName();

            if ($method->isStatic() || !$method->isPublic()) {
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

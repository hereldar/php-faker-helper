<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Tests;

use Faker\Generator as FakerGenerator;
use Hereldar\FakerHelper\Generator;
use ReflectionClass;

final class GeneratorTest extends TestCase
{
    private const DISCARDED_METHODS = [
        '__construct',
        '__destruct',
        '__get',
        '__call',
        '__wakeup',
        'ext',
        'addProvider',
        'getProviders',
        'seed',
        'format',
        'getFormatter',
        'parse',
        'callFormatWithMatches',
    ];

    private const NOT_IMPLEMENTED_METHODS = [
        'unique',
        'optional',
        'valid',
        'passthrough',
        'randomElements',
        'randomElement',
        'randomKey',
        'shuffle',
        'shuffleArray',
        'shuffleString',
        'numerify',
        'lexify',
        'bothify',
        'asciify',
        'regexify',
        'toLower',
        'toUpper',
        'biasedNumberBetween',
        'setDefaultTimezone',
        'getDefaultTimezone',
        'file',
        'imageUrl',
        'image',
    ];

    public function testFakerGeneratorMethods(): void
    {
        $generatorReflection = new ReflectionClass(Generator::class);
        $fakerGeneratorReflection = new ReflectionClass(FakerGenerator::class);

        foreach ($fakerGeneratorReflection->getMethods() as $method) {
            if ($method->isStatic()
                || !$method->isPublic()
                || \in_array($method->getName(), self::DISCARDED_METHODS, true)
                || \in_array($method->getName(), self::NOT_IMPLEMENTED_METHODS, true)) {
                continue;
            }

            self::assertMethodExists($generatorReflection, $method->getName());
        }
    }

    public function testFakerGeneratorAnnotatedMethods(): void
    {
        $generatorReflection = new ReflectionClass(Generator::class);
        $fakerGeneratorReflection = new ReflectionClass(FakerGenerator::class);

        $docComment = $fakerGeneratorReflection->getDocComment();
        self::assertisString($docComment);

        \preg_match_all('/@method\s+\S+\s+(\w+)\(/', $docComment, $matches);

        foreach ($matches[1] as $methodName) {
            if (\in_array($methodName, self::DISCARDED_METHODS, true)
                || \in_array($methodName, self::NOT_IMPLEMENTED_METHODS, true)) {
                continue;
            }

            self::assertMethodExists($generatorReflection, $methodName);
        }
    }

    public static function assertMethodExists(ReflectionClass $class, string $methodName): void
    {
        self::assertTrue(
            $class->hasMethod($methodName),
            "{$class->name} does not have a method called {$methodName}()."
        );
    }
}

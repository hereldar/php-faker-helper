<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalCharacter
{
    /**
     * Returns a random letter from a to z.
     *
     * @return non-empty-string|null
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function letter(): ?string
    {
        return $this->fakerGenerator->randomLetter();
    }

    /**
     * Returns a random ASCII character (excluding accents and special chars).
     *
     * @return non-empty-string|null
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function ascii(): ?string
    {
        return $this->fakerGenerator->randomAscii();
    }

    /**
     * Returns an Emoji (Unicode character between U+1F600 and U+1F637).
     *
     * @see https://en.wikipedia.org/wiki/Emoji#Unicode_blocks
     *
     * @return non-empty-string|null
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function emoji(): ?string
    {
        return $this->fakerGenerator->emoji();
    }

    /**
     * @return non-empty-string|null
     *
     * @deprecated
     * Returns a random letter from a to z
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomLetter(): ?string
    {
        return $this->fakerGenerator->randomLetter();
    }

    /**
     * @return non-empty-string|null
     *
     * @deprecated
     * Returns a random ASCII character (excluding accents and special chars)
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function randomAscii(): ?string
    {
        return $this->fakerGenerator->randomAscii();
    }
}

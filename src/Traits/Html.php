<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Html
{
    /**
     * @return non-empty-string
     */
    public function html(int $maxDepth = 4, int $maxWidth = 4): string
    {
        return $this->fakerGenerator->randomHtml($maxDepth, $maxWidth);
    }

    /**
     * @return non-empty-string
     *
     * @deprecated
     */
    public function randomHtml(int $maxDepth = 4, int $maxWidth = 4): string
    {
        return $this->fakerGenerator->randomHtml($maxDepth, $maxWidth);
    }
}

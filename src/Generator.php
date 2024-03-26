<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Faker\Generator as FakerGenerator;
use Faker\UniqueGenerator as FakerUniqueGenerator;
use Hereldar\FakerHelper\Traits\Address;
use Hereldar\FakerHelper\Traits\Barcode;
use Hereldar\FakerHelper\Traits\Blood;
use Hereldar\FakerHelper\Traits\Boolean;
use Hereldar\FakerHelper\Traits\Character;
use Hereldar\FakerHelper\Traits\Color;
use Hereldar\FakerHelper\Traits\Company;
use Hereldar\FakerHelper\Traits\Decimal;
use Hereldar\FakerHelper\Traits\Digit;
use Hereldar\FakerHelper\Traits\File;
use Hereldar\FakerHelper\Traits\Hash;
use Hereldar\FakerHelper\Traits\Html;
use Hereldar\FakerHelper\Traits\Integer;
use Hereldar\FakerHelper\Traits\Internet;
use Hereldar\FakerHelper\Traits\IsoCode;
use Hereldar\FakerHelper\Traits\Payment;
use Hereldar\FakerHelper\Traits\Person;
use Hereldar\FakerHelper\Traits\Phone;
use Hereldar\FakerHelper\Traits\Text;
use Hereldar\FakerHelper\Traits\Time;
use Hereldar\FakerHelper\Traits\UserAgent;
use Hereldar\FakerHelper\Traits\Uuid;
use Hereldar\FakerHelper\Traits\Version;
use OverflowException;

class Generator
{
    use Address;
    use Barcode;
    use Blood;
    use Boolean;
    use Character;
    use Color;
    use Company;
    use Decimal;
    use Digit;
    use File;
    use Hash;
    use Html;
    use Integer;
    use Internet;
    use IsoCode;
    use Payment;
    use Person;
    use Phone;
    use Text;
    use Time;
    use UserAgent;
    use Uuid;
    use Version;

    private ?self $uniqueGenerator = null;

    public function __construct(
        private FakerGenerator|FakerUniqueGenerator $fakerGenerator,
    ) {}

    /**
     * With the unique generator you are guaranteed to never get the same two
     * values.
     *
     * <code>
     * // will never return twice the same value
     * faker()->unique()->digit();
     * </code>
     *
     * @param bool $reset If set to true, resets the list of existing values
     * @param int $maxRetries maximum number of retries to find a unique value,
     *                        After which an OverflowException is thrown
     *
     * @return static A proxy class returning only non-existing values
     *
     * @throws OverflowException When no unique value can be found by iterating $maxRetries times
     */
    public function unique(bool $reset = false, int $maxRetries = 10000): static
    {
        if (!$reset && null !== $this->uniqueGenerator) {
            return $this->uniqueGenerator;
        }

        $fakerUniqueGenerator = $this->fakerGenerator->unique($reset, $maxRetries);

        return $this->uniqueGenerator = new static($fakerUniqueGenerator);
    }
}

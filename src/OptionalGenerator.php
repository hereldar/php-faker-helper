<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper;

use Faker\ChanceGenerator as OptionalFakerGenerator;
use Hereldar\FakerHelper\Traits\OptionalAddress;
use Hereldar\FakerHelper\Traits\OptionalBarcode;
use Hereldar\FakerHelper\Traits\OptionalBlood;
use Hereldar\FakerHelper\Traits\OptionalBoolean;
use Hereldar\FakerHelper\Traits\OptionalCharacter;
use Hereldar\FakerHelper\Traits\OptionalColor;
use Hereldar\FakerHelper\Traits\OptionalCompany;
use Hereldar\FakerHelper\Traits\OptionalDecimal;
use Hereldar\FakerHelper\Traits\OptionalDigit;
use Hereldar\FakerHelper\Traits\OptionalFile;
use Hereldar\FakerHelper\Traits\OptionalHash;
use Hereldar\FakerHelper\Traits\OptionalHtml;
use Hereldar\FakerHelper\Traits\OptionalInteger;
use Hereldar\FakerHelper\Traits\OptionalInternet;
use Hereldar\FakerHelper\Traits\OptionalIsoCode;
use Hereldar\FakerHelper\Traits\OptionalPayment;
use Hereldar\FakerHelper\Traits\OptionalPerson;
use Hereldar\FakerHelper\Traits\OptionalPhone;
use Hereldar\FakerHelper\Traits\OptionalText;
use Hereldar\FakerHelper\Traits\OptionalTime;
use Hereldar\FakerHelper\Traits\OptionalUserAgent;
use Hereldar\FakerHelper\Traits\OptionalUuid;
use Hereldar\FakerHelper\Traits\OptionalVersion;

class OptionalGenerator
{
    use OptionalAddress;
    use OptionalBarcode;
    use OptionalBlood;
    use OptionalBoolean;
    use OptionalCharacter;
    use OptionalColor;
    use OptionalCompany;
    use OptionalDecimal;
    use OptionalDigit;
    use OptionalFile;
    use OptionalHash;
    use OptionalHtml;
    use OptionalInteger;
    use OptionalInternet;
    use OptionalIsoCode;
    use OptionalPayment;
    use OptionalPerson;
    use OptionalPhone;
    use OptionalText;
    use OptionalTime;
    use OptionalUserAgent;
    use OptionalUuid;
    use OptionalVersion;

    public function __construct(
        private OptionalFakerGenerator $fakerGenerator,
    ) {}
}

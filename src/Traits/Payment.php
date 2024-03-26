<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

use DateTime;

trait Payment
{
    /**
     * Returns a credit card vendor name.
     *
     * @return non-empty-string
     *
     * @example 'MasterCard'
     */
    public function creditCardType(): string
    {
        return $this->fakerGenerator->creditCardType();
    }

    /**
     * Returns the String of a credit card number.
     *
     * @param string|null $type Supporting any of 'Visa', 'MasterCard', 'American Express', 'Discover' and 'JCB'
     * @param bool $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string $separator Separator string for formatting card number. Defaults to dash (-).
     *
     * @return non-empty-string
     *
     * @example '4485480221084675'
     */
    public function creditCardNumber(?string $type = null, bool $formatted = false, string $separator = '-'): string
    {
        return $this->fakerGenerator->creditCardNumber($type, $formatted, $separator);
    }

    /**
     * @param bool $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     *
     * @example 04/13
     */
    public function creditCardExpirationDate(bool $valid = true): DateTime
    {
        return $this->fakerGenerator->creditCardExpirationDate($valid);
    }

    /**
     * @param bool $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     *
     * @return non-empty-string
     *
     * @example '04/13'
     */
    public function creditCardExpirationDateString(bool $valid = true, ?string $expirationDateFormat = null): string
    {
        return $this->fakerGenerator->creditCardExpirationDateString($valid, $expirationDateFormat);
    }

    /**
     * @param bool $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     */
    public function creditCardDetails(bool $valid = true): array
    {
        return $this->fakerGenerator->creditCardDetails($valid);
    }

    /**
     * International Bank Account Number (IBAN).
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string|null $countryCode ISO 3166-1 alpha-2 country code
     * @param string $prefix for generating bank account number of a specific bank
     * @param int|null $length total length without country code and 2 check digits
     *
     * @return non-empty-string
     */
    public function iban(?string $countryCode = null, string $prefix = '', ?int $length = null): string
    {
        return $this->fakerGenerator->iban($countryCode, $prefix, $length);
    }

    /**
     * Return the String of a SWIFT/BIC number.
     *
     * @return non-empty-string Swift/Bic number
     *
     * @see    http://en.wikipedia.org/wiki/ISO_9362
     *
     * @example 'RZTIAT22263'
     */
    public function swiftBicNumber(): string
    {
        return $this->fakerGenerator->swiftBicNumber();
    }
}

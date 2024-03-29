<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

use DateInterval;
use DateTime;
use DateTimeInterface;
use DateTimeZone;
use Hereldar\FakerHelper\Helpers\Sanitize;

trait OptionalTime
{
    /**
     * Get a timestamp between January 1, 1970, and now.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return int<0, max>|null
     *
     * @example 1061306726
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function unixTime(DateTimeInterface|int|string $max = 'now'): ?int
    {
        /** @var int<0, max>|null */
        return $this->fakerGenerator->unixTime(Sanitize::timestamp($max));
    }

    /**
     * Get a datetime object for a date between January 1, 1970 and now.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     *
     * @example DateTime('2005-08-16 20:39:21')
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTime(DateTimeInterface|int|string $max = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTime(Sanitize::timestamp($max), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a datetime object for a date between January 1, 001 and now.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     *
     * @example DateTime('1265-03-22 21:15:52')
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeAD(DateTimeInterface|int|string $max = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeAD(Sanitize::timestamp($max), Sanitize::timeZoneName($timezone));
    }

    /**
     * get a date string formatted with ISO8601.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example '2003-10-21T16:05:52+0000'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function iso8601(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->iso8601(Sanitize::timestamp($max));
    }

    /**
     * Get a date string between January 1, 1970 and now.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example '2008-11-27'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function date(string $format = 'Y-m-d', DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->date($format, Sanitize::timestamp($max));
    }

    /**
     * Get a time string (24h format by default).
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example '15:02:34'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function time(string $format = 'H:i:s', DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->time($format, Sanitize::timestamp($max));
    }

    /**
     * Get a DateTime object based on a random date between two given dates.
     * Accepts date strings that can be recognized by strtotime().
     *
     * @param DateTimeInterface|int|string $startDate Defaults to 30 years ago
     * @param DateTimeInterface|int|string $endDate Defaults to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     *
     * @example DateTime('1999-02-02 11:42:52')
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeBetween(DateTimeInterface|int|string $startDate = '-30 years', DateTimeInterface|int|string $endDate = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeBetween(Sanitize::dateTime($startDate), Sanitize::timestamp($endDate), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a DateTime object based on a random date between one given date and
     * an interval
     * Accepts date string that can be recognized by strtotime().
     *
     * @param DateTimeInterface|int|string $date Defaults to 30 years ago
     * @param DateInterval|string $interval Defaults to 5 days after
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @example dateTimeInInterval('1999-02-02 11:42:52', '+ 5 days')
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeInInterval(DateTimeInterface|int|string $date = '-30 years', DateInterval|string $interval = '+5 days', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeInInterval(Sanitize::dateTime($date), Sanitize::dateIntervalString($interval), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a date time object somewhere within a century.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeThisCentury(DateTimeInterface|int|string $max = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeThisCentury(Sanitize::timestamp($max), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a date time object somewhere within a decade.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeThisDecade(DateTimeInterface|int|string $max = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeThisDecade(Sanitize::timestamp($max), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a date time object somewhere inside the current year.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeThisYear(DateTimeInterface|int|string $max = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeThisYear(Sanitize::timestamp($max), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a date time object somewhere within a month.
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     * @param DateTimeZone|string|null $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dateTimeThisMonth(DateTimeInterface|int|string $max = 'now', DateTimeZone|string|null $timezone = null): ?DateTime
    {
        return $this->fakerGenerator->dateTimeThisMonth(Sanitize::timestamp($max), Sanitize::timeZoneName($timezone));
    }

    /**
     * Get a string containing either "am" or "pm".
     *
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example 'am'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function amPm(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->amPm(Sanitize::timestamp($max));
    }

    /**
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example '22'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dayOfMonth(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->dayOfMonth(Sanitize::timestamp($max));
    }

    /**
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example 'Tuesday'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function dayOfWeek(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->dayOfWeek(Sanitize::timestamp($max));
    }

    /**
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example '7'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function month(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->month(Sanitize::timestamp($max));
    }

    /**
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example 'September'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function monthName(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->monthName(Sanitize::timestamp($max));
    }

    /**
     * @param DateTimeInterface|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return non-empty-string|null
     *
     * @example '1987'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function year(DateTimeInterface|int|string $max = 'now'): ?string
    {
        return $this->fakerGenerator->year(Sanitize::timestamp($max));
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'XVII'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function century(): ?string
    {
        return $this->fakerGenerator->century();
    }

    /**
     * @return non-empty-string|null
     *
     * @example 'Europe/Paris'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function timezone(?string $countryCode = null): ?string
    {
        return $this->fakerGenerator->timezone($countryCode);
    }
}

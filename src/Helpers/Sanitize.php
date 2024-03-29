<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Helpers;

use DateInterval;
use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;

final class Sanitize
{
    public static function dateIntervalString(DateInterval|string $interval): string
    {
        if (\is_string($interval)) {
            return $interval;
        }

        $sign = ($interval->invert) ? -1 : +1;
        $tokens = [];

        if ($interval->y) {
            $tokens[] = \sprintf('%s years', $interval->y * $sign);
        }

        if ($interval->m) {
            $tokens[] = \sprintf('%s months', $interval->m * $sign);
        }

        if ($interval->d) {
            $tokens[] = \sprintf('%s days', $interval->d * $sign);
        }

        if ($interval->h) {
            $tokens[] = \sprintf('%s hours', $interval->h * $sign);
        }

        if ($interval->i) {
            $tokens[] = \sprintf('%s minutes', $interval->i * $sign);
        }

        if ($interval->s) {
            $tokens[] = \sprintf('%s seconds', $interval->s * $sign);
        }

        /** @psalm-suppress InvalidOperand */
        if ($interval->f) {
            $tokens[] = \sprintf('%s microseconds', ((int) \round($interval->f * 1_000_000)) * $sign);
        }

        return \implode(' + ', $tokens) ?: '0 seconds';
    }

    public static function dateTime(DateTimeInterface|int|string $timestamp): DateTime
    {
        if ($timestamp instanceof DateTime) {
            return $timestamp;
        }

        if ($timestamp instanceof DateTimeImmutable) {
            return DateTime::createFromImmutable($timestamp);
        }

        if (\is_int($timestamp) || \is_numeric($timestamp)) {
            /** @var DateTime */
            return DateTime::createFromFormat('U', (string) $timestamp);
        }

        return new DateTime($timestamp ?: 'now');
    }

    public static function timeZoneName(DateTimeZone|string|null $timezone): ?string
    {
        if ($timezone instanceof DateTimeZone) {
            return $timezone->getName();
        }

        /** @psalm-suppress RiskyTruthyFalsyComparison */
        return $timezone ?: null;
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function timestamp(DateTimeInterface|int|string $timestamp): int
    {
        if (\is_int($timestamp)) {
            return $timestamp;
        }

        if (\is_numeric($timestamp)) {
            return (int) $timestamp;
        }

        if ($timestamp instanceof DateTimeInterface) {
            return $timestamp->getTimestamp();
        }

        $timestamp = \strtotime($timestamp ?: 'now');

        if (false === $timestamp) {
            throw new InvalidArgumentException('Invalid timestamp provided');
        }

        return $timestamp;
    }
}

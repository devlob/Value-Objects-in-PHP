<?php

namespace App;

use InvalidArgumentException;

class Currency
{
    public function __construct(private readonly string $isoCode)
    {
        if (!in_array($isoCode, ['EUR', 'USD'])) {
            throw new InvalidArgumentException('Invalid ISO code');
        }
    }

    public function isoCode(): string
    {
        return $this->isoCode;
    }

    public function equals(Currency $currency): bool
    {
        return $this->isoCode() === $currency->isoCode();
    }

    public static function make(string $isoCode): Currency
    {
        return new self($isoCode);
    }
}
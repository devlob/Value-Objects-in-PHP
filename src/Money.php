<?php

namespace App;

class Money
{
    public function __construct(
        private readonly Currency $currency,
        private readonly int $amount,
    )
    {
    }

    public function currency(): Currency
    {
        return $this->currency;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function equals(Money $money): bool
    {
        return $this->currency()->equals($money->currency()) && $this->amount() === $money->amount();
    }

    public function __toString(): string
    {
        return "{$this->amount()} {$this->currency()->isoCode()}";
    }

    public static function make(Currency $currency, int $amount): Money
    {
        return new self($currency, $amount);
    }
}

<?php

declare(strict_types=1);

namespace App\Domain;

final readonly class Tea implements Beverage
{
    public const UNIT_PRICE = 1.5;

    public function __construct(private Supplements $supplements)
    {
    }

    public function calculatePrice(): float
    {
        return self::UNIT_PRICE + $this->supplements->calculatePrice();
    }
}

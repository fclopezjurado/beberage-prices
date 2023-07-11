<?php

declare(strict_types=1);

namespace App\Domain;

final class Cinnamon implements Supplement
{
    public const UNIT_PRICE = 0.05;

    public function calculatePrice(): float
    {
        return self::UNIT_PRICE;
    }
}

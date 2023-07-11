<?php

declare(strict_types=1);

namespace App\Domain;

final class Milk implements Supplement
{
    public const UNIT_PRICE = 0.1;

    public function calculatePrice(): float
    {
        return self::UNIT_PRICE;
    }
}

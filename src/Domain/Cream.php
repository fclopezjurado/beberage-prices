<?php

declare(strict_types=1);

namespace App\Domain;

final class Cream implements Supplement
{
    public const UNIT_PRICE = 0.15;

    public function price(): float
    {
        return self::UNIT_PRICE;
    }
}

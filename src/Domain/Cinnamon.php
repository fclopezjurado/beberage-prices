<?php

declare(strict_types=1);

namespace App\Domain;

final class Cinnamon implements Supplement
{
    public const UNIT_PRICE = 0.05;

    public function price(): float
    {
        return 0.05;
    }
}

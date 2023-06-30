<?php

declare(strict_types=1);

namespace App\Domain;

final class CoffeeWithMilk extends Coffee
{
    public function price(): float
    {
        return parent::price() + 1.2;
    }
}

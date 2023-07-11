<?php

declare(strict_types=1);

namespace App\Domain;

interface Beverage
{
    public function calculatePrice(): float;
}

<?php

declare(strict_types=1);

namespace App\Domain;

class HotChocolate implements Beverage
{
    public function price(): float
    {
        return 1.45;
    }
}

<?php

declare(strict_types=1);

namespace App\Domain;

final class HotChocolateWithCream extends HotChocolate
{
    public function price(): float
    {
        return 1.45 + 0.15;
    }
}

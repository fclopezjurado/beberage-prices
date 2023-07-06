<?php

declare(strict_types=1);

namespace App\Domain;

class Coffee implements Beverage
{
    /**
     * @param Supplement[] $supplements
     */
    public function __construct(private readonly array $supplements)
    {
    }

    private function calculateSupplementPrice(): float
    {
        $price = 0;

        foreach ()
    }
    public function price(): float
    {
        return 1.2;
    }
}

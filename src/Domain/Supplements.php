<?php

declare(strict_types=1);

namespace App\Domain;

final readonly class Supplements
{
    /**
     * @param Supplement[] $supplements
     */
    public function __construct(private array $supplements)
    {
    }

    public function calculatePrice(): float
    {
        $price = 0;

        foreach ($this->supplements as $supplement) {
            $price += $supplement->calculatePrice();
        }

        return $price;
    }
}

<?php

namespace Unit\Domain;

use App\Domain\Cinnamon;
use App\Domain\Coffee;
use App\Domain\Cream;
use App\Domain\Milk;
use App\Domain\Supplement;
use App\Domain\Supplements;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

class CoffeeShould extends TestCase
{
    /**
     * @param Supplement[] $supplements
     */
    #[Test]
    #[DataProvider('provideSupplements')]
    #[TestDox('Calculates coffee price')]
    public function calculatePrice(array $supplements): void
    {
        $supplementsPrice = Coffee::UNIT_PRICE;
        $coffee = new Coffee(new Supplements($supplements));

        foreach ($supplements as $supplement) {
            $supplementsPrice += $supplement->calculatePrice();
        }

        self::assertEquals($supplementsPrice, $coffee->calculatePrice());
    }

    /**
     * @return iterable<array<int, Supplement[]>>
     */
    public static function provideSupplements(): iterable
    {
        yield [
            [
                new Milk(),
                new Cream(),
                new Cinnamon(),
            ],
        ];
        yield [
            [
                new Milk(),
                new Cinnamon(),
            ],
        ];
        yield [
            [
                new Cinnamon(),
            ],
        ];
    }
}

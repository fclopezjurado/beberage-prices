<?php

namespace Unit\Domain;

use App\Domain\Cinnamon;
use App\Domain\Cream;
use App\Domain\Milk;
use App\Domain\Supplement;
use App\Domain\Supplements;
use App\Domain\Tea;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

class TeaShould extends TestCase
{
    public const DECIMAL_COMPARISON_DELTA = 0.001;

    /**
     * @param Supplement[] $supplements
     */
    #[Test]
    #[DataProvider('provideSupplements')]
    #[TestDox('Calculates tea price')]
    public function calculatePrice(array $supplements): void
    {
        $supplementsPrice = Tea::UNIT_PRICE;
        $tea = new Tea(new Supplements($supplements));

        foreach ($supplements as $supplement) {
            $supplementsPrice += $supplement->calculatePrice();
        }

        self::assertEqualsWithDelta($supplementsPrice, $tea->calculatePrice(), self::DECIMAL_COMPARISON_DELTA);
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

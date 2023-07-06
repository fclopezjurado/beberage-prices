<?php

declare(strict_types=1);

namespace App\Domain;

interface Supplement
{
    public function price(): float;
}

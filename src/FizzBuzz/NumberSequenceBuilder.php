<?php

namespace StasPiv\PrymTest\FizzBuzz;

use StasPiv\PrymTest\FizzBuzz\SingleNumberPrinter\SingleNumberPrinter;

class NumberSequenceBuilder
{
    /**
     * @param SingleNumberPrinter $fizzBuzzStrategy
     * @param int $number
     * @return array
     */
    public function buildSequence(SingleNumberPrinter $fizzBuzzStrategy, int $number): array
    {
        return array_map(
            [$fizzBuzzStrategy, 'printNumber'],
            range(1, $number)
        );
    }
}
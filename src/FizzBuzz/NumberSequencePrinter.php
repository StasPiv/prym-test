<?php

namespace StasPiv\PrymTest\FizzBuzz;

use StasPiv\PrymTest\FizzBuzz\SingleNumberPrinter\SingleNumberPrinter;

class NumberSequencePrinter
{
    private NumberSequenceBuilder $builder;

    /**
     * NumberSequencePrinter constructor.
     * @param NumberSequenceBuilder $builder
     */
    public function __construct(NumberSequenceBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function print(int $number, SingleNumberPrinter $fizzBuzzStrategy, string $separator = ' '): string
    {
        return implode(
            $separator,
            $this->builder->buildSequence($fizzBuzzStrategy, $number)
        );
    }
}
<?php

namespace StasPiv\PrymTest\FizzBuzz\SingleNumberPrinter;

class DumpPrinter implements SingleNumberPrinter
{
    public function printNumber(int $number): string
    {
        return $number;
    }
}
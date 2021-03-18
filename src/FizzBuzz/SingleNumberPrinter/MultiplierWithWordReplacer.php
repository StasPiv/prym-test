<?php

namespace StasPiv\PrymTest\FizzBuzz\SingleNumberPrinter;

use RuntimeException;

class MultiplierWithWordReplacer implements SingleNumberPrinter
{
    private array $numberMap;

    /**
     * NumberMultiplierStrategy constructor.
     * @param array|string[] $numberMap
     */
    public function __construct(array $numberMap)
    {
        $this->validateNumberMap($numberMap);
        $this->numberMap = $numberMap;
    }

    public function printNumber(int $number): string
    {
        $output = '';

        foreach ($this->numberMap as $multiplier => $word) {
            if ($number % $multiplier === 0) {
                $output .= $word;
            }
        }

        return empty($output) ? $number : $output;
    }

    private function validateNumberMap(array $numberMap): void
    {
        foreach ($numberMap as $number => $word) {
            if (!is_numeric($number) || !is_string($word)) {
                throw new RuntimeException('Keys must be numbers, values must be strings for number multiplier strategy');
            }
        }
    }
}
<?php
    use StasPiv\PrymTest\FizzBuzz\NumberSequenceBuilder;
    use StasPiv\PrymTest\FizzBuzz\SingleNumberPrinter\DumpPrinter;
    use StasPiv\PrymTest\FizzBuzz\NumberSequencePrinter;
    use StasPiv\PrymTest\FizzBuzz\SingleNumberPrinter\MultiplierWithWordReplacer;

    require_once 'vendor/autoload.php';
    $sequencePrinter = new NumberSequencePrinter(new NumberSequenceBuilder());

    if (!isset($argv[1]) || !is_numeric($argv[1])) {
        throw new RuntimeException(sprintf('Example of usage: php %s 10', __FILE__));
    }

    echo $sequencePrinter->print(
        $argv[1],
        new MultiplierWithWordReplacer([
            3 => 'Fizz',
            5 => 'Buzz',
        ])
    ) . PHP_EOL;

    echo $sequencePrinter->print(
        $argv[1],
        new DumpPrinter()
    );
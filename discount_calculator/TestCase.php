<?php

declare(strict_types=1);

abstract class TestCase
{
    public function assertEquals($expected, $actual)
    {
        $message = "
            Expected: {$expected}.
            Actual: {$actual}
        ";

        if ($expected !== $actual) throw new AssertionError($message);

        echo "Test passed!\n";
    }
}

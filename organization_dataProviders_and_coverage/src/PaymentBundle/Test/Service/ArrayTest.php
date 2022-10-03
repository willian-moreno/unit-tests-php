<?php

namespace PaymentBundle\Test\Service;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    private $array;

    /**
     * @test
     */
    public function shouldBeEmpty()
    {
        $this->assertEmpty($this->array);
    }

    /**
     * @test
     */
    public function shouldBeFilled()
    {
        $this->array = ['hello' => 'world'];

        $this->assertNotEmpty($this->array);
    }
}

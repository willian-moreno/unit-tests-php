<?php

declare(strict_types=1);

final class DiscountCalculatorTest extends TestCase
{
    public function shouldApply_WhenValueIsAboveTheMinimumTest()
    {
        $discountCalculator = new DiscountCalculator();
        $input = 130;

        $expected = 110;
        $totalWithDiscount = $discountCalculator->apply($input);

        $this->assertEquals($expected, $totalWithDiscount);
    }

    public function shouldNotApply_WhenValueIsBellowTheMinimumTest()
    {
        $discountCalculator = new DiscountCalculator();
        $input = 80;

        $expected = 80;
        $totalWithDiscount = $discountCalculator->apply($input);

        $this->assertEquals($expected, $totalWithDiscount);
    }
}

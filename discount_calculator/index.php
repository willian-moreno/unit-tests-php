<?php

declare(strict_types=1);

require('./autoloader.php');

$discountCalculator = new DiscountCalculator();
$value = $discountCalculator->apply(200);

echo $value;
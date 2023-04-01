<?php

use App\Currency;
use App\Money;

require_once('vendor/autoload.php');

$currencyInEur = new Currency('EUR');
//echo $currencyInEur->isoCode(); // EUR

$currencyInUsd = new Currency('USD');
//echo $currencyInUsd->isoCode(); // USD

//echo $currencyInEur->equals($currencyInUsd); // false

//new Currency('GBP'); // will throw an InvalidArgumentException

$moneyEur = new Money(
    new Currency('EUR'),
    1200,
);
//echo "An iPhone in Germany costs around $moneyEur"; // An iPhone in Germany costs around 1200 EUR

$moneyUsd = new Money(
    new Currency('USD'),
    1000,
);
//echo "In the US it costs less, about $moneyUsd"; // In the US it costs less, about 1000 USD

//echo $moneyEur->equals($moneyUsd); // false

$moneyEur = Money::make(Currency::make('EUR'), 1200);
//echo "An iPhone in Germany costs around $moneyEur"; // An iPhone in Germany costs around 1200 EUR

$moneyUsd = Money::make(Currency::make('USD'), 1000);
//echo "In the US it costs less, about $moneyUsd"; // In the US it costs less, about 1000 USD

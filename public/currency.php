<?php

ini_set('display_errors', 'on');

include "functions.php";
// Simple usage
$formatter = new NumberFormatter('tr_TR', NumberFormatter::CURRENCY);

$amount = 1234.56;
$currency = 'TRY';

$formatResult = $formatter->formatCurrency($amount, $currency);
echo "Simple usage";
pretty($formatResult);

// Customized formats - NOT WORKING, CHECK DOCS
// $cFormatter = new NumberFormatter('tr_TR', NumberFormatter::CURRENCY);

// $cFormatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, '₺');

// $cformatResult = $cFormatter->format($amount);

// pretty($cformatResult);

// Parsing formatted string
$pFormatter = new NumberFormatter('tr_TR', NumberFormatter::CURRENCY);

$str = '₺1.234,56';
$pos = 0;
$amount = $pFormatter->parseCurrency($str, $pCurrency, $pos);

pretty($amount);
pretty($pCurrency);

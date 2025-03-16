<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "functions.php";
// Simple usage
$formatter = new NumberFormatter('tr_TR', NumberFormatter::CURRENCY);

$amount = 1234.56;
$currency = 'TRY';

$formatResult = $formatter->formatCurrency($amount, $currency);
p("<h2>Simple usage</h2>");
p("<h3>Input</h3>");
p("<b>amount</b>: {$amount}");
p("<b>currency</b>: {$currency}");
p("<b>locale</b>: tr_TR");
pretty($formatResult);

// Customized formats and symbols
$cFormatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

$cFormatter->setPattern('¤#,##0.00');
$cFormatter->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '₺');

$cformatResult = $cFormatter->format($amount);

p("<h2>Customized formats and symbols</h2>");
p("<h3>Input</h3>");
p("<b>amount</b>: {$amount}");
p("<b>currency</b>: {$currency}");
p("<b>locale</b>: en_US");
pretty($cformatResult);


// Parsing formatted string
$pFormatter = new NumberFormatter('tr_TR', NumberFormatter::CURRENCY);

$str = '₺1.234,56';
$pos = 0;
$amount = $pFormatter->parseCurrency($str, $pCurrency, $pos);

p("<h2>Parsing formatted string</h2>");
p("<b>string</b>: {$str}");
p("<b>currency</b>: {$currency}");
p("<b>locale</b>: tr_TR");
pretty($amount);
pretty($pCurrency);

// CURRENCY_ACCOUNTING format
$accFor = new NumberFormatter('en_US', NumberFormatter::CURRENCY_ACCOUNTING);
$negAmount = -1234.56;
$accRes = $accFor->formatCurrency($negAmount, $currency);
p("<h2>CURRENCY_ACCOUNTING format</h2>");
p("<b>amount</b>: {$negAmount}");
p("<b>currency</b>: {$currency}");
p("<b>locale</b>: en_US");
pretty($accRes);
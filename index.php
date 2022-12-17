<?php

function currency_convert($amountInSourceCurrency, $sourceCurrency, $targetCurrency)
{
    $sourceCurrency_basic = get_details($sourceCurrency);
    $target_currency_basic = get_details($targetCurrency);
    $currency_calculation = ($amountInSourceCurrency/$sourceCurrency_basic)*$target_currency_basic;
    echo $currency_calculation;
}

function get_details($details)
{
    $details_json = file_get_contents('details.json');
    $decode_file = json_decode($details_json, true);
    $currency_data = $decode_file['rates'];

    foreach ($currency_data as $currency_rates)
    {
        $target_currency = $currency_rates['target_currency'];
        $currency_value = $currency_rates['value'];

        if($target_currency == $details)
        {
            return $currency_value;
        }
    }
}

currency_convert(1000,'LKR','USD');
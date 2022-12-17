<?php

class status
{
    public $amountInSourceCurrency;
    public $sourceCurrency;
    public $targetCurrency;
}

class client
{
    public $instance = NULL;

    public function __construct()
    {
        $params = array(
            'location'=> 'http://localhost/AA1860/Currency-Converter/server.php?wsdl',
            'uri'=>'http://localhost/AA1860/Currency-Converter/server.php?wsdl',
            'trace'=>1,'cache_wsdl'=>WSDL_CACHE_NONE);
        $this->instance = new SoapClient(NULL, $params);
    }

    public function Currency_Conversion($status_details)
    {
        return $this->instance->__soapCall('currency_convert',[$status_details]);
    }

}

$client = new client;

$status_details = new status();

$status_details->amountInSourceCurrency = 1000;

$status_details->sourceCurrency = 'LKR';

$status_details->targetCurrency = 'USD';

try
{
    echo "Status\t: " , $client->Currency_Conversion($status_details), "\n";

    echo "Done\n";
}
catch (Exception $e)
{
    echo "Caught exception: ", $e->getMessage(), "\n";
}

?>
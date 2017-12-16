<?php

class Currencies extends Controller
{
    function callCURL($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $combined = curl_exec ($ch);
        curl_close ($ch);

        return $combined;
    }

    public static function get() {
        $convertedCurrencies = [];
        $currencies = ['BTCPLN', 'BCCPLN' ,'LTCPLN', 'DASHPLN', 'LSKPLN', 'ETHPLN', 'GAMEPLN'];
        foreach ($currencies as $currency => $value) {
            $response = self::callCURL('https://bitbay.net/API/Public/'.$value.'/ticker.json');
            if (strlen($response) !== 0) {
                $convertedCurrencies[str_replace('PLN', '', $value)] = json_decode($response, true);
            }
        }

        return [
            'currencies' => $convertedCurrencies
        ];
    }
}
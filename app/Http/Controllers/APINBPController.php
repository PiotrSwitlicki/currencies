<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Currency;


class APINBPController extends Controller
{
        public function getExchangeRates()
    {
        $date = date('Y-m-d');
        $weekday = date("l",strtotime($date));
        if($weekday="saturday") 
        {
            $date=date("Y-m-d",strtotime("-1 days",time()));
        }
        if($weekday="sunday") 
        {
            $date=date("Y-m-d",strtotime("-2 days",time()));
        }
        $client = new Client();
        $response = $client->request('GET', "http://api.nbp.pl/api/exchangerates/tables/A/{$date}/?format=json");        
        $exchangeRates = json_decode($response->getBody()->getContents(), true);
        $data = json_decode($response->getBody(), true);
        //dd($exchangeRates);
        foreach ($data[0]['rates'] as $rate) {
            $currency = new Currency;
            $currency->currency_code = $rate['code'];
            $currency->name = $rate['currency'];
            $currency->exchange_rate = $rate['mid'];
         // $currency->date = $data[0]['effectiveDate'];
            $currency->save();
        }
         
        // zwróć wynik do widoku lub przetwórz dane dalej
        return view('currency', ['exchangeRates' => $exchangeRates]);
    }
}

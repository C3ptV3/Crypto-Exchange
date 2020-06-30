<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\BTC;
use GuzzleHttp\Client;
class InfoController extends Controller
{
    public function BTC(){
        $client = new Client();
        $res = $client->request('GET', 'https://cex.io/api/price_stats/BTC/USD', [
            'form_params' => [
                "lastHours"=> '100',
                "maxRespArrSize"=> '100'  
            ]
            ]);
        $json=$res->getBody();
        $array = json_decode($json, true);
                
        $count=0;
        $newarray=[];
        foreach ($array as $arrays){
            $newarray[$count]=$arrays['price'];
            $count=$count +1;
        }
        $count=0;
        $newarray1=[];
        foreach ($array as $arrays){
            $newarray1[$count]=$arrays['tmsp'];
            $newarray1[$count]=date("H:i:s",$newarray1[$count]);
            $count=$count +1;
        }
        $chart = new BTC;
        $chart->labels($newarray1);
        $chart->dataset('BTC Price', 'line', $newarray);
        $chart->options([
            'tooltip' => [
                'show' => true 
            ],
            'axisPointer'=> [
                'show'=>true
            ]
        ]);
        return view('btc-info', compact('chart'));
    }
    public function ETH(){
        $client = new Client();
        $res = $client->request('GET', 'https://cex.io/api/price_stats/ETH/USD', [
            'form_params' => [
                "lastHours"=> '100',
                "maxRespArrSize"=> '100'  
            ]
            ]);
        $json=$res->getBody();
        $array = json_decode($json, true);

        $count=0;
        $newarray=[];
        foreach ($array as $arrays){
            $newarray[$count]=$arrays['price'];
            $count=$count +1;
        }
        $count=0;
        $newarray1=[];
        foreach ($array as $arrays){
            $newarray1[$count]=$arrays['tmsp'];
            $newarray1[$count]=date("H:i:s",$newarray1[$count]);
            $count=$count +1;
        }
        $chart = new BTC;
        $chart->labels($newarray1);
        $chart->dataset('ETH Price', 'line', $newarray);
        $chart->options([
            'tooltip' => [
                'show' => true 
            ],
            'axisPointer'=> [
                'show'=>true
            ]
        ]);
        return view('ethereum-info', compact('chart'));
    }
}

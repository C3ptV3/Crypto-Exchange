<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Trade;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class BuyController extends Controller
{
    public function transaction(){
        $user=Auth::user();
        $trades = Trade::where('sold',0 )->paginate(10);

        return view('trade',compact('trades','user')); 
        
    }
    public function transactionerror(){
        $user=Auth::user();
        $trades = Trade::where('sold',0 )->paginate(10);
        $errors1=array(
            "error"=>$_GET["error"]);

        return view('trade',compact('trades','user','errors1')); 
        
    }
    public function transactionsucces(){
        $user=Auth::user();
        $trades = Trade::where('sold',0 )->paginate(10);
        $success1=array(
            "success"=>$_GET["success"]);

        return view('trade',compact('trades','user','success1')); 
        
    }
    public function transactionid($id){
        $tradeid=$id;
        $user=Auth::user();
        $transaction=new Transaction;
        $transaction1=new Transaction;
        $transaction2=new Transaction;
        $trade = Trade::find($tradeid);
        $selluser=User::find($trade['customer_id']);
        if ($user[$trade['trade_to']]>=$trade['trade_to_value']) {

            $transaction['trade_id_num']=$trade['trade_id'];
            $transaction['customer_id']=$user['id'];
            $transaction['change_type']="TradeDone-";
            $transaction['old_value']=$user[$trade['trade_to']];
            $transaction['change_currency']=$trade['trade_to'];

            $transaction1['trade_id_num']=$trade['trade_id'];
            $transaction1['customer_id']=$user['id'];
            $transaction1['change_type']="TradeDone+";
            $transaction1['old_value']=$user[$trade['trade_from']];
            $transaction1['change_currency']=$trade['trade_from'];
            
            $transaction2['trade_id_num']=$trade['trade_id'];
            $transaction2['customer_id']=$selluser['id'];
            $transaction2['change_type']="TradeSell";
            $transaction2['old_value']=$selluser[$trade['trade_to']];
            $transaction2['change_currency']=$trade['trade_to'];

            $user[$trade['trade_to']]=$user[$trade['trade_to']]-$trade['trade_to_value'];
            $transaction['new_value']=$user[$trade['trade_to']];
            

            $user[$trade['trade_from']]=$user[$trade['trade_from']]+$trade['trade_from_value'];
            $transaction1['new_value']=$user[$trade['trade_from']];

            $trade['bought_id']=$user['id'];
            $trade['sold']=1;

            $selluser[$trade['trade_to']]=$selluser[$trade['trade_to']]+$trade['trade_to_value'];
            $transaction2['new_value']=$selluser[$trade['trade_to']];




            $transaction->save();
            $transaction1->save();
            $transaction2->save();
            $selluser->save();


            $trade->save();
            $user->save();
            $success='Successful';
            return redirect()->route('success',compact('success'));
        }else{
            $error='Not enough Funds';
            return redirect()->route('error',compact('error'));
        }
        
        $trade->save();
        $user->save();
        return redirect()->route('trade');

    }
    public function transactioncreate(){
        $client = new Client();
        $res = $client->request('GET', 'https://cex.io/api/last_price/BTC/USD');
        $json=$res->getBody();
        $array = json_decode($json, true);

        $user=Auth::user();

        return view('newtrade',compact('user','array'));

    }
    public function transactioncreateid(Request $response){
        $user=Auth::user();
        $transaction=new Transaction;
        
        $trade=new Trade;
        
        $x=$user[$response['currency_from']];
        $validatedData = $response->validate([
            'amount' => 'required|lte:'.$x,
        ]);
        $transaction['customer_id']=$user['id'];
        $transaction['change_type']="TradeCreate";
        $transaction['old_value']=$user[$response['currency_from']];
        $transaction['change_currency']=$response['currency_from'];

        $user[$response['currency_from']]=$user[$response['currency_from']]-$response['amount'];
        $transaction['new_value']=$user[$response['currency_from']];
        $trade['customer_id']=$user['id'];
        $trade['trade_from']=$response['currency_from'];
        $trade['trade_to']=$response['currency_to'];
        $trade['trade_from_value']=$response['amount'];
        $trade['trade_to_value']=$response['total'];
        $trade['trade_price']=$response['price'];
        $trade['bought_id']=0;
        $trade['sold']=0;
        $trade->save();

        $last_trade=Trade::latest('trade_id')->first();
        $transaction['trade_id_num']=$last_trade['trade_id'];
        $transaction->save();
        $user->save();

        return redirect()->route('trade');
            
    }

}

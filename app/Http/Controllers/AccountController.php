<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Trade;
use App\Transaction;

class AccountController extends Controller
{
    public function settings()
    {
        $user = Auth::user();
        $trades=Trade::where('customer_id',$user['id'] )->paginate(10);
        return view('account-settings',compact('user','trades'));
    }
    public function edit(Request $response){
        
        $validatedData = $response->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|unique:customers',
            'location' => 'required',
        ]);

        $affected = DB::table('customers')
              ->where('id',Auth::id() )
              ->update(['name' => $response['first_name'],
              'surname' => $response['last_name'],
              'phone' => $response['phone'],
              'address' => $response['location']]);
        
        $user = Auth::user();
        return redirect()->route('settings', ['user'=>$user]);
    }
    public function info()
    {
        $user = Auth::user();
        $transaction=Transaction::where('customer_id',$user['id'] )->paginate(10);
        return view('account-info',compact('user','transaction'));
    }
}

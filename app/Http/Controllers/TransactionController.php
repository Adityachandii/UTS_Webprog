<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function pushTransaction(Request $request){
        $pushTrans = new Transaction();
        $pushTrans->transaction_date = Carbon::now()->toDateString();
        $pushTrans->coffee_id = $request->coffeeid;
        $pushTrans->save();

        return redirect()->route('transactionHistory');
    }

    public function showAllTransaction(){
        $headerTransaction = Transaction::all();
        $transaction = Transaction::all();
        return view('profile.transaction', compact('transaction', 'headerTransaction'));
    }
}

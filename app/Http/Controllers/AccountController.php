<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;

class AccountController extends Controller
{
    

    public function userAccountList(){
        $data['accounts'] = Account::orderBy('created_at', 'DESC')->get();

        return view('backend.accounts.list')->with($data);
    }


    public function makeTransaction(Request $request){

         Transaction::create([
            'account_id' => $request->account_id,
            'amount' => $request->amount,
            'type' => $request->type,
            'date' => date('Y-m-d h:i:s A'),
        ]);

        Account::where('id', $request->account_id)->decrement('balance', $request->amount);

        return redirect()->back()->with('message', 'Transaction Done Successfully');
 
    }


    public function userTransaction(){
 
        $data['transactions'] = Transaction::with('account')->orderBy('created_at', 'DESC')->get();

        return view('backend.transactions.index')->with($data);
    }


}

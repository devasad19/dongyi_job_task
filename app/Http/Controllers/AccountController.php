<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    




    public function userAccountList(){

        $data['accounts'] = Account::get();

        return view('backend.accounts.list')->with($data);
    }


}

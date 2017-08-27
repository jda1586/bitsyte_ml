<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='wallet';
        $breadcrumbs[0]['route']='wallet';
        $breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';
        $title= "Wallets";
        return view('wallet.index')->with(['breadcrumbs'=>$breadcrumbs, 'title'=>$title]);
    }
}

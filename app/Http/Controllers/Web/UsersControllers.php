<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersControllers extends Controller
{

    public function new()
    {
        $breadcrumbs[0]['name']='Users';
        $breadcrumbs[0]['route']='Users';
        $breadcrumbs[1]['name']='New';
        $breadcrumbs[1]['route']='New';

        return view('Users.new')->with(['breadcrumbs'=>$breadcrumbs]);
    }
}

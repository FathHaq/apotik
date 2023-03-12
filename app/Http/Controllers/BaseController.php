<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){

        $user = User::count();

        return view('template.index',[
            'user'   => $user,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatController extends Controller
{
    public function list()
    {
        $master = [
            'John',
            'Golf',
        ];
        return view('crate.master',[
            master => $master,
        ]);
    }
}

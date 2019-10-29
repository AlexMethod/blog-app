<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return View("pages/index");
    }

    public function about(){
        return View('pages/about');
    }

    public function services(){
        $id = request('id');
        $cost = request('cost');
        $data = ['Web Design','Programming'];
        return View('pages/services',[
            'idForView' => $id,
            'costForView' => $cost,
            'services' => $data
        ]);
    }
}

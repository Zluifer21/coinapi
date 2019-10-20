<?php

namespace App\Http\Controllers;


class CoinController extends Controller
{
    /**
     * redirects to main view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        return view('coins.index');
    }
}

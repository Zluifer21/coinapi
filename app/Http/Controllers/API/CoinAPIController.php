<?php

namespace App\Http\Controllers;

use App\Repositories\Coins;


class CoinAPIController extends Controller
{

    protected $coins;

    public function __construct(Coins $coins)
    {
        $this->coins = $coins;
    }

    public function index()
    {
         return $this->coins->getassets(4);
    }
}

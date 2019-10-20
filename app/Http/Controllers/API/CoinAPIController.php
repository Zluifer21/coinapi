<?php

namespace App\Http\Controllers;

use App\Repositories\Coins;

/**
 * Class CoinApiController
 * @package App\Http\Controllers\API
 */

class CoinAPIController extends Controller
{

    protected $coins;

    /**
     * Creates an instance of the Coin class
     */
    public function __construct(Coins $coins)
    {
        $this->coins = $coins;
    }

    public function index()
    {
         return $this->coins->getassets(4);
    }
}

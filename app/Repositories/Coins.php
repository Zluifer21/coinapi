<?php

namespace App\Repositories;

class Coins extends GuzzleHttpRequest
{

    public function getassets($limit)
    {
        $assetes = $this->get('assets');
        return array_slice( $assetes,0, $limit);
    }
}

<?php

namespace App\Repositories;

class Coins extends GuzzleHttpRequest
{
    /**
     * gets assets from the api using the method  Inheritance  from GuzzleHttpRequest
     *
     * @param int $limit
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */

    public function getassets(int $limit)
    {
        $assetes = $this->get('assets');
        return array_slice( $assetes,0, $limit);
    }
}

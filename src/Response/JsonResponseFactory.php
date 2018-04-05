<?php

namespace Dooglys\Api\Response;

/**
 * Class JsonResponseFactory
 *
 * @package Dooglys\Api\Response
 */
class JsonResponseFactory extends AbstractResponseFactory
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function parseData($data)
    {
        $data = json_decode($data, true);

        return $data;
    }
}
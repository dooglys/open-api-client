<?php

namespace Dooglys\Api\Response;

/**
 * Class AbstractResponseFactory
 * @package Dooglys\Api\Response
 */
abstract class AbstractResponseFactory
{
    abstract function parseData($data);
}
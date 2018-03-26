<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.10.2016
 * Time: 9:36
 */

namespace Dooglys\Api\Response;


abstract class AbstractResponseFactory
{
    abstract function parseData($data);
}
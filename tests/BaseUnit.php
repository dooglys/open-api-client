<?php

use Dooglys\Api\Client;

/**
 * Class BaseTest
 *
 * @author Petr Marochkin <petun911@gmail.com>
 */
class BaseUnit extends PHPUnit_Framework_TestCase
{

    /** @var  Client */
    protected $client;

    /**
     *
     */
    public function setUp()
    {
        $this->client = new Client(API_TENANT_DOMAIN, API_TOKEN, ['base_uri' => API_URI]);
        parent::setUp();
    }
}
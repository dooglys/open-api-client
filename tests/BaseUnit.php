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
        $this->client = new Client(['base_uri' => API_URI]);
        $this->client->setTenantDomain(API_TENANT_DOMAIN);
        parent::setUp();
    }

    /**
     * Set token for client requests
     */
    protected function setClientToken()
    {
        $this->client->setAccessToken(API_TOKEN);
    }

}
<?php

namespace Dooglys\Api;

use Dooglys\Api\Module\LoyaltyClientInterface;
use Dooglys\Api\Module\SalesClientInterface;
use Dooglys\Api\Module\StructureClientInterface;
use Dooglys\Api\Module\TerminalClientInterface;
use Dooglys\Api\Module\WarehouseClientInterface;

/**
 * Interface ClientInterface
 *
 * @package Dooglys\Api
 */
interface ClientInterface extends
    LoyaltyClientInterface,
    StructureClientInterface,
    TerminalClientInterface,
    SalesClientInterface,
    WarehouseClientInterface
{
}

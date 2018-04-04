<?php

namespace Dooglys\Api;

use Dooglys\Api\Module\LoyaltyClientInterface;
use Dooglys\Api\Module\SalesClientInterface;
use Dooglys\Api\Module\StructureClientInterface;
use Dooglys\Api\Module\TerminalClientInterface;

/**
 * Interface ClientInterface
 *
 * @package Dooglys\Api
 */
interface ClientInterface extends
    LoyaltyClientInterface,
    StructureClientInterface,
    TerminalClientInterface,
    SalesClientInterface
{
}
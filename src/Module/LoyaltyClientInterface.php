<?php

namespace Dooglys\Api\Module;

/**
 * Interface LoyaltyClientInterface
 * @package Dooglys\Api\Module
 */
interface LoyaltyClientInterface
{
    /**
     * API метод /v1/loyalty/transaction/buy-commit
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyCommit(array $options = []);

    /**
     * API метод /v1/loyalty/transaction/buy-new
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyNew(array $options = []);

    /**
     * API метод /v1/loyalty/transaction/buy-return
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyReturn(array $options = []);

    /**
     * API метод /v1/loyalty/card/info
     * @param $options
     *
     * @return mixed
     */
    public function loyaltyCardInfo($options);

    /**
     * API метод /v1/loyalty/settings/view
     *
     * @return mixed
     */
    public function loyaltySettingsView();
}
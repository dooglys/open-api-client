<?php

namespace Dooglys\Api\Module;

/**
 * Interface SalesClientInterface
 * @package Dooglys\Api\Module
 */
interface SalesClientInterface {
    /**
     * API метод /v1/sales/order/view
     * @param $id
     *
     * @return mixed
     */
    public function salesOrderView ($id);

    /**
     * API метод /v1/sales/order/create
     * @param array $options
     *
     * @return mixed
     */
    public function salesOrderCreate (array $options = []);

    /**
     * API метод /v1/sales/order/update
     * @param $id
     * @param array $options
     *
     * @return mixed
     */
    public function salesOrderUpdate ($id, array $options = []);

    /**
     * API метод /v1/sales/order/list
     * @param array $options
     *
     * @return mixed
     */
    public function salesOrderList (array $options = []);
}
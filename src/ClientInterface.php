<?php

namespace Dooglys\Api;

use Dooglys\Api\Module\LoyaltyClientInterface;
use Dooglys\Api\Module\StructureClientInterface;

/**
 * Interface ClientInterface
 *
 * @package Dooglys\Api
 */
interface ClientInterface extends LoyaltyClientInterface, StructureClientInterface {
    /**
     * API метод /v1/nomenclature/product/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function nomenclatureProductView ($id);

    /**
     * API метод /v1/nomenclature/product/list
     *
     * @param $options
     *
     * @return mixed
     *
     */
    public function nomenclatureProductList (array $options = []);

    /**
     * API метод /v1/nomenclature/category/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function nomenclatureCategoryView ($id);

    /**
     * API метод /v1/nomenclature/category/list
     *
     * @param $options
     *
     * @return mixed
     *
     */
    public function nomenclatureCategoryList (array $options = []);

    /**
     * API метод /v1/terminal-menu/menu/view
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuView ($id);

    /**
     * API метод /v1/terminal-menu/menu/kit
     * @param array $options
     *
     * @return mixed
     */
    public function terminalMenuMenuKit ($id);

    /**
     * API метод /v1/terminal-menu/menu/kit-products
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuKitProducts ($id);

    /**
     * API метод /v1/terminal-menu/menu/modifier
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuModifier ($id);

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
    public function salelOrderUpdate ($id, array $options = []);

    /**
     * API метод /v1/sales/order/list
     * @param array $options
     *
     * @return mixed
     */
    public function salesOrderList (array $options = []);
}
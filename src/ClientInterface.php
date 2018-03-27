<?php

namespace Dooglys\Api;


/**
 * Interface ClientInterface
 *
 * @package Dooglys\Api
 */
interface ClientInterface {

    /**
     * @param $token
     *
     * @return mixed
     */
    public function setAccessToken ($token);

    /**
     * API метод /v1/structure/sale-point/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function structureSalePointView ($id);

    /**
     * API метод /v1/structure/sale-point/list
     *
     * @param $options
     *
     * @return mixed
     *
     */
    public function structureSalePointList (array $options = []);

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
     * API метод /v1/structure/user/view
     * @param $id
     *
     * @return mixed
     */
    public function structureUserView ($id);

    /**
     * API метод /v1/structure/user/list
     * @param array $options
     *
     * @return mixed
     */
    public function structureUserList (array $options = []);

    /**
     * API метод /v1/terminal-menu/menu/view
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuView ($id);

    /**
     * API метод /v1/loyalty/transaction/buy-commit
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyCommit (array $options = []);

    /**
     * API метод /v1/loyalty/transaction/buy-new
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyNew (array $options = []);

    /**
     * API метод /v1/loyalty/transaction/buy-return
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyReturn (array $options = []);

    /**
     * API метод /v1/loyalty/card/info
     * @param $options
     *
     * @return mixed
     */
    public function loyaltyCardInfo ($options);

    /**
     * API метод /v1/loyalty/settings/view
     *
     * @return mixed
     */
    public function loyaltySettingsView ();

    /**
     * API метод /v1/structure/tenant/settings
     * @param array $options
     *
     * @return mixed
     */
    public function structureTenantSettings (array $options = []);

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
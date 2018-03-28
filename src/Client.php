<?php

namespace Dooglys\Api;

use Dooglys\Api\Exception\BadResponseException;
use Dooglys\Api\Response\JsonResponseFactory;
use GuzzleHttp\Psr7\Response;

/**
 * Class Client
 *
 * @package Dooglys\Api
 */
class Client implements ClientInterface {

    /** @var  \GuzzleHttp\Client */
    protected $httpClient;

    /** @var string */
    protected $baseUri = 'api.dooglys.com';

    /** @var  integer */
    protected $timeout = 300;

    /** @var  string */
    protected $accessToken;

    /** @var  string */
    protected $tenantDomain;

    /**
     * Client constructor.
     *
     * @param array $httpClientConfig
     */
    public function __construct ($tenantDomain, $accessToken, $httpClientConfig = []) {
        $this->tenantDomain = $tenantDomain;
        $this->accessToken = $accessToken;
        $this->initHttpClient ($httpClientConfig);
    }

    /**
     * @param $httpClientConfig
     */
    protected function initHttpClient ($httpClientConfig) {
        $this->baseUri = 'https://' . $this->tenantDomain . $this->baseUri;
        $config = array_merge ([
            'base_uri' => $this->baseUri,
            'timeout' => $this->timeout,
            'headers' => [
                'User-Agent' => 'dooglys-api-client',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Access-Token' => $this->accessToken,
                'Tenant-Domain' => $this->tenantDomain,
            ]
        ], $httpClientConfig);

        $this->httpClient = new \GuzzleHttp\Client($config);

    }

    /**
     * Basic method for all api calls
     *
     * @param        $method
     * @param string $uri
     * @param array $options
     *
     * @return mixed
     * @throws BadResponseException
     */
    protected function callMethod ($uri, $method = 'GET', $options = []) {
        $headers = [];

        try {

            $requestKeyOptions = [
                'GET' => 'query',
                'POST' => 'json',
                'PUT' => 'json',
            ];

            $response = $this->httpClient->request ($method, $uri,
                [
                    'headers' => $headers,
                    $requestKeyOptions[$method] => $options
                ]);

            return $this->parseResponse ($response);

        } catch (\Exception $e) {
            throw new BadResponseException($e->getMessage ());
        }
    }

    /**
     * Returns api method data (now at json format)
     *
     * @param Response $response
     *
     * @return array
     */
    protected function parseResponse (Response $response) {
        $data = $response->getBody ()->getContents ();
        $factory = new JsonResponseFactory();
        return $factory->parseData ($data);
    }

    /**
     * API метод /v1/structure/sale-point/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function structureSalePointView ($id) {
        return $this->callMethod ('v1/structure/sale-point/view/' . $id);
    }

    /**
     * API метод /v1/structure/sale-point/list
     *
     * @param $options
     *
     * @return mixed
     *
     */
    public function structureSalePointList (array $options = []) {
        return $this->callMethod ('v1/structure/sale-point/list', 'GET', $options);
    }

    /**
     * API метод /v1/nomenclature/product/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function nomenclatureProductView ($id) {
        return $this->callMethod ('v1/nomenclature/product/view/' . $id);
    }

    /**
     * API метод /v1/nomenclature/product/list
     *
     * @param $options
     *
     * @return mixed
     *
     */
    public function nomenclatureProductList (array $options = []) {
        return $this->callMethod ('v1/nomenclature/product/list', 'GET', $options);
    }

    /**
     * API метод /v1/nomenclature/category/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function nomenclatureCategoryView ($id) {
        return $this->callMethod ('v1/nomenclature/category/view/' . $id);
    }

    /**
     * API метод /v1/nomenclature/category/list
     *
     * @param $options
     *
     * @return mixed
     *
     */
    public function nomenclatureCategoryList (array $options = []) {
        return $this->callMethod ('v1/nomenclature/category/list', 'GET', $options);
    }

    /**
     * API метод /v1/structure/user/view
     * @param $id
     *
     * @return mixed
     */
    public function structureUserView ($id) {
        return $this->callMethod ('v1/structure/user/view/' . $id);
    }

    /**
     * API метод /v1/structure/user/list
     * @param array $options
     *
     * @return mixed
     */
    public function structureUserList (array $options = []) {
        return $this->callMethod ('v1/structure/user/list', 'GET', $options);
    }

    /**
     * API метод /v1/terminal-menu/menu/view
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuView ($id) {
        return $this->callMethod ('v1/terminal-menu/menu/view/' . $id);
    }

    /**
     * API метод /v1/loyalty/transaction/buy-commit
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyCommit (array $options = []) {
        return $this->callMethod ('v1/loyalty/transaction/buy-commit', 'POST', $options);
    }

    /**
     * API метод /v1/loyalty/transaction/buy-new
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyNew (array $options = []) {
        return $this->callMethod ('v1/loyalty/transaction/buy-new', 'POST', $options);
    }

    /**
     * API метод /v1/loyalty/transaction/buy-return
     * @param array $options
     *
     * @return mixed
     */
    public function loyaltyTransactionBuyReturn (array $options = []) {
        return $this->callMethod ('v1/loyalty/transaction/buy-return', 'POST', $options);
    }

    /**
     * API метод /v1/loyalty/card/info
     * @param $options
     *
     * @return mixed
     */
    public function loyaltyCardInfo ($options) {
        return $this->callMethod ('v1/loyalty/card/info', 'POST', $options);
    }

    /**
     * API метод /v1/loyalty/settings/view
     *
     * @return mixed
     */
    public function loyaltySettingsView () {
        return $this->callMethod ('v1/loyalty/settings/view');
    }

    /**
     * API метод /v1/structure/tenant/settings
     * @param array $options
     *
     * @return mixed
     */
    public function structureTenantSettings (array $options = []) {
        return $this->callMethod ('v1/structure/tenant/settings', 'GET', $options);
    }

    /**
     * API метод /v1/terminal-menu/menu/kit
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuKit ($id) {
        return $this->callMethod ('v1/terminal-menu/menu/kit/' . $id);
    }

    /**
     * API метод /v1/terminal-menu/menu/kit-products
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuKitProducts ($id) {
        return $this->callMethod ('v1/terminal-menu/menu/kit-products/' . $id);
    }

    /**
     * API метод /v1/terminal-menu/menu/modifier
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuModifier ($id) {
        return $this->callMethod ('v1/terminal-menu/menu/modifier/' . $id);
    }

    /**
     * API метод /v1/sales/order/view
     * @param $id
     *
     * @return mixed
     */
    public function salesOrderView ($id) {
        return $this->callMethod ('v1/sales/order/view/' . $id);
    }

    /**
     * API метод /v1/sales/order/create
     * @param array $options
     *
     * @return mixed
     */
    public function salesOrderCreate (array $options = []) {
        return $this->callMethod ('v1/sales/order/create/', 'POST', $options);
    }

    /**
     * API метод /v1/sales/order/update
     * @param $id
     * @param array $options
     *
     * @return mixed
     */
    public function salelOrderUpdate ($id, array $options = []) {
        return $this->callMethod ('v1/sales/order/view/' . $id, 'POST', $options);
    }

    /**
     * API метод /v1/sales/order/list
     * @param array $options
     *
     * @return mixed
     */
    public function salesOrderList (array $options = []) {
        return $this->callMethod ('v1/sales/order/list', 'GET', $options);
    }
}

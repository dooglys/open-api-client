<?php

namespace Dooglys\Api;

use Dooglys\Api\Exception\BadResponseException;
use Dooglys\Api\Response\JsonResponseFactory;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

/**
 * Class Client
 *
 * @package Dooglys\Api
 */
class Client implements ClientInterface
{

    /** @var  \GuzzleHttp\Client */
    protected $httpClient;

    /** @var string */
    protected $baseUri = '.dooglys.com/api/';

    /** @var  integer */
    protected $timeout = 300;

    /** @var  string */
    protected $accessToken;

    /** @var  string */
    protected $tenantDomain;

    /**
     * Client constructor.
     *
     * @param $tenantDomain
     * @param $accessToken
     * @param array $httpClientConfig
     */
    public function __construct($tenantDomain, $accessToken, $httpClientConfig = [])
    {
        $this->tenantDomain = $tenantDomain;
        $this->accessToken = $accessToken;
        $this->initHttpClient($httpClientConfig);
    }

    /**
     * @param $httpClientConfig
     */
    protected function initHttpClient($httpClientConfig)
    {
        if (!empty($httpClientConfig['base_uri'])) {
            $this->baseUri = $httpClientConfig['base_uri'];
            unset($httpClientConfig['base_uri']);
        }
        $this->baseUri = 'https://' . $this->tenantDomain . $this->baseUri;
        $config = array_merge([
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
     * @inheritdoc
     */
    public function structureSalePointView($id)
    {
        return $this->callMethod('v1/structure/sale-point/view/' . $id);
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function callMethod($uri, $method = 'GET', $options = [])
    {
        $headers = [];

        try {

            $requestKeyOptions = [
                'GET' => 'query',
                'POST' => 'json',
                'PUT' => 'json',
            ];

            $response = $this->httpClient->request($method, $uri,
                [
                    'headers' => $headers,
                    $requestKeyOptions[$method] => $options
                ]);

            return $this->parseResponse($response);
        }
        catch (RequestException $e) {
            $data = [];
            $response = $e->getResponse();
            if ($response instanceof Response) {
                $data = $this->parseResponse($response);
            }

            throw new BadResponseException($e->getMessage(), 0, $e, $data);
        }
        catch (\Exception $e) {
            throw new BadResponseException($e->getMessage());
        }
    }

    /**
     * Returns api method data (now at json format)
     *
     * @param Response $response
     *
     * @return array
     */
    protected function parseResponse(Response $response)
    {
        $data = $response->getBody()->getContents();
        $factory = new JsonResponseFactory();
        return $factory->parseData($data);
    }

    /**
     * @inheritdoc
     */
    public function structureSalePointSync(array $options)
    {
        return $this->callMethod('v1/structure/sale-point/sync', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function structureSalePointList(array $options = [])
    {
        return $this->callMethod('v1/structure/sale-point/list', 'GET', $options);
    }

    /**
     * @inheritdoc
     */
    public function nomenclatureProductView($id)
    {
        return $this->callMethod('v1/nomenclature/product/view/' . $id);
    }


    /**
     * @inheritdoc
     */
    public function nomenclatureProductSync(array $options)
    {
        return $this->callMethod('v1/nomenclature/product/sync', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function nomenclatureProductList(array $options = [])
    {
        return $this->callMethod('v1/nomenclature/product/list', 'GET', $options);
    }

    /**
     * @inheritdoc
     */
    public function nomenclatureCategoryView($id)
    {
        return $this->callMethod('v1/nomenclature/category/view/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function nomenclatureCategoryList(array $options = [])
    {
        return $this->callMethod('v1/nomenclature/category/list', 'GET', $options);
    }


    /**
     * @inheritdoc
     */
    public function nomenclatureCategorySync(array $options)
    {
        return $this->callMethod('v1/nomenclature/product-category/sync', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function structureUserView($id)
    {
        return $this->callMethod('v1/structure/user/view/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function structureUserList(array $options = [])
    {
        return $this->callMethod('v1/structure/user/list', 'GET', $options);
    }

    /**
     * @inheritdoc
     */
    public function terminalMenuMenuView($id)
    {
        return $this->callMethod('v1/terminal-menu/menu/view/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function loyaltyTransactionBuyCommit(array $options = [])
    {
        return $this->callMethod('v1/loyalty/transaction/buy-commit', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function loyaltyTransactionBuyNew(array $options = [])
    {
        return $this->callMethod('v1/loyalty/transaction/buy-new', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function loyaltyTransactionBuyReturn(array $options = [])
    {
        return $this->callMethod('v1/loyalty/transaction/buy-return', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function loyaltyCardInfo($options)
    {
        return $this->callMethod('v1/loyalty/card/info', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function loyaltySettingsView()
    {
        return $this->callMethod('v1/loyalty/settings/view');
    }

    /**
     * @inheritdoc
     */
    public function structureTenantSettings(array $options = [])
    {
        return $this->callMethod('v1/structure/tenant/settings', 'GET', $options);
    }

    /**
     * @inheritdoc
     */
    public function terminalMenuMenuKit($id)
    {
        return $this->callMethod('v1/terminal-menu/menu/kit/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function terminalMenuMenuKitProducts($id)
    {
        return $this->callMethod('v1/terminal-menu/menu/kit-products/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function terminalMenuMenuModifier($id)
    {
        return $this->callMethod('v1/terminal-menu/menu/modifier/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function salesOrderView($id)
    {
        return $this->callMethod('v1/sales/order/view/' . $id);
    }

    /**
     * @inheritdoc
     */
    public function salesOrderCreate(array $options = [])
    {
        return $this->callMethod('v1/sales/order/create/', 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function salesOrderUpdate($id, array $options = [])
    {
        return $this->callMethod('v1/sales/order/update/' . $id, 'POST', $options);
    }

    /**
     * @inheritdoc
     */
    public function salesOrderList(array $options = [])
    {
        return $this->callMethod('v1/sales/order/list', 'GET', $options);
    }
}

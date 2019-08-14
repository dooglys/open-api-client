<?php

namespace Dooglys\Api\Module;

/**
 * Class WarehouseClientInterface
 * @package Dooglys\Api\Module
 */
interface  WarehouseClientInterface
{
    /**
     * API метод /v1/warehouse/document/list
     * @param array $options
     * @return mixed
     */
    public function warehouseDocumentList(array $options = []);

    /**
     * API метод /v1/warehouse/document/view
     * @param $id
     * @param array $options
     * @return mixed
     */
    public function warehouseDocumentView($id, array $options = []);
}

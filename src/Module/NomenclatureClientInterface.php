<?php

namespace Dooglys\Api\Module;

/**
 * Interface NomenclatureClientInterface
 * @package Dooglys\Api\Module
 */
interface NomenclatureClientInterface {
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
}
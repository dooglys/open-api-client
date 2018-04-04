<?php

namespace Dooglys\Api\Module;

/**
 * Interface StructureClientInterface
 * @package Dooglys\Api\Module
 */
interface StructureClientInterface {
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
     * API метод /v1/structure/tenant/settings
     * @param array $options
     *
     * @return mixed
     */
    public function structureTenantSettings (array $options = []);

    /**
     * API метод /v1/structure/sale-point/view
     *
     * @param $id
     *
     * @return mixed
     *
     */
    public function structureSalePointView ($id);
}
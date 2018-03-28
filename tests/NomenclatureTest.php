<?php

require_once ("BaseUnit.php");

/**
 * Class NomenclatureTest
 */
class NomenclatureTest extends BaseUnit {
    public function testNomenclatureProductView () {
        $data = $this->client->nomenclatureProductView ('fef36b6d-5ba3-452c-8f39-22a75912b674');
        $this->assertInternalType ('array', $data);
    }

    public function testNomenclatureProductList () {
        $data = $this->client->nomenclatureProductList ();
        $this->assertInternalType ('array', $data);
    }

    public function testNomenclatureCategoryView () {
        $data = $this->client->nomenclatureCategoryView ('831804ec-d8f6-437c-98fb-d12d665e94df');
        $this->assertInternalType ('array', $data);
    }

    public function testNomenclatureCategoryList () {
        $data = $this->client->nomenclatureCategoryList ();
        $this->assertInternalType ('array', $data);
    }
}
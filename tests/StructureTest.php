<?php

require_once ("BaseUnit.php");

/**
 * Class StructureTest
 */
class StructureTest extends BaseUnit {
    public function testStructureSalePointView () {
        $data = $this->client->structureSalePointView ('94bdb66f-70ba-4940-8a67-b637d6edf46f');
        $this->assertInternalType ('array', $data);
    }

    public function testStructureSalePointList () {
        $data = $this->client->structureSalePointList ();
        $this->assertInternalType ('array', $data);
    }

    public function testStructureUserView () {
        $data = $this->client->structureUserView ('9d8a2728-d99e-46a9-ab6b-c4645bd2ae40');
        $this->assertInternalType ('array', $data);
    }

    public function testStructureUserList () {
        $data = $this->client->structureUserList ();
        $this->assertInternalType ('array', $data);
    }

    public function testStructureTenantSettings () {
        $data = $this->client->structureTenantSettings ();
        $this->assertInternalType ('array', $data);
    }
}
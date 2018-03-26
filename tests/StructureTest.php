<?php

require_once ("BaseUnit.php");

/**
 * Class StructureTest
 */
class StructureTest extends BaseUnit {
    public function testStructureSalePointView () {
        $this->setClientToken ();
        $data = $this->client->structureSalePointView ('94bdb66f-70ba-4940-8a67-b637d6edf46f');
        $this->assertInternalType ('array', $data);
    }

    public function testStructureSalePointList () {
        $this->setClientToken ();
        $data = $this->client->structureSalePointList ();
        $this->assertInternalType ('array', $data);
    }

    public function testStructureUserView () {
        $this->setClientToken ();
        $data = $this->client->structureUserView ('9d8a2728-d99e-46a9-ab6b-c4645bd2ae40');
        $this->assertInternalType ('array', $data);
    }

    public function testStructureUserList () {
        $this->setClientToken ();
        $data = $this->client->structureUserList ();
        $this->assertInternalType ('array', $data);
    }

    public function testStructureTenantSettings () {
        $this->setClientToken ();
        $data = $this->client->structureTenantSettings ();
        $this->assertInternalType ('array', $data);
    }
}
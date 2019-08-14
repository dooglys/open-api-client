<?php

/**
 * Class WarehouseTest
 */
final class WarehouseTest extends BaseUnit
{
    public function testDocumentList()
    {
        $data = $this->client->warehouseDocumentList();
        $this->assertInternalType('array', $data);
    }

    public function testDocumentView()
    {
        $data = $this->client->warehouseDocumentView('19c86e8b-7c54-4c58-a94c-647583ce660d');

        $this->assertInternalType('array', $data);
    }
}

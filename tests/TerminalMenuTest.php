<?php

require_once ("BaseUnit.php");

/**
 * Class TerminalMenuTest
 */
class TerminalMenuTest extends BaseUnit {
    public function testTerminalMenuMenuView () {
        $data = $this->client->terminalMenuMenuView ('647ea788-3b78-4ef3-a885-d0eb1fc18a35');
        $this->assertInternalType ('array', $data);
    }

    public function testTerminalMenuMenuKit () {
        $data = $this->client->terminalMenuMenuKit ('647ea788-3b78-4ef3-a885-d0eb1fc18a35');
        $this->assertInternalType ('array', $data);
    }

    public function testTerminalMenuMenuKitProducts () {
        $data = $this->client->terminalMenuMenuKitProducts ('647ea788-3b78-4ef3-a885-d0eb1fc18a35');
        $this->assertInternalType ('array', $data);
    }

    public function testTerminalMenuMenuModifier () {
        $data = $this->client->terminalMenuMenuModifier ('66da9cf0-0aa3-40ab-a598-923ad82f9aec');
        $this->assertInternalType ('array', $data);
    }
}
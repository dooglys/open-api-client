<?php

require_once ("BaseUnit.php");

/**
 * Class LoyaltyTest
 */
class LoyaltyTest extends BaseUnit {
    public function testTransactions () {
        $cardId = '86ba69d2-4e51-a51f-adce-f73a4f08c86e';
        $cardTrack = '2010020020005389016=20251210148424444';

        $options = [
            'card_id' => $cardId,
            'date' => \time (),
            'total_cost' => 1000,
            'order_type' => 'sale_point',
            'auth_type' => 'track2',
            'sale_point_id' => '94bdb66f-70ba-4940-8a67-b637d6edf46f',
            'order_items' => [
                [
                    'product_id' => 'fef36b6d-5ba3-452c-8f39-22a75912b674',
                    'quantity' => 10,
                    'price' => 100,
                    'cost' => 100,
                    'total_cost' => 1000
                ],
            ],
        ];

        $this->setClientToken ();

        $data = $this->client->loyaltyTransactionBuyNew ($options);

        $this->assertInternalType ('array', $data);

        $transactionId = $data['id'];

        $data = $this->client->loyaltyTransactionBuyCommit ([
            'transaction_id' => $transactionId,
            'auth_type' => 'track2',
        ]);

        $this->assertInternalType ('array', $data);

        $data = $this->client->loyaltyCardInfo ([
            'track2' => $cardTrack,
        ]);

        $this->assertInternalType ('array', $data);

        $data = $this->client->loyaltyTransactionBuyReturn ([
            'transaction_id' => $transactionId,
        ]);

        $this->assertInternalType ('array', $data);
    }

    public function testLoyaltySettingsView () {
        $this->setClientToken ();
        $data = $this->client->loyaltySettingsView ();

        $this->assertInternalType ('array', $data);
    }
}

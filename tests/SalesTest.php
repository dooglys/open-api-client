<?php

require_once ("BaseUnit.php");

/**
 * Class SalesTest
 */
class SalesTest extends BaseUnit {
    public function testOrderCrud () {
        $orderId = '1ff52e23-865b-47d1-9d54-20321170615a';
        $options = [
            'id' => $orderId,
            'number' => '123',
            'comment' => 'comment',
            'total_cost' => 2700,
            'discount_percent' => 10,
            'discount_value' => 300,
            'items_cost' => 3000,
            'date_created' => 1478067593,
            'date_accepted' => 1478067593,
            'payment_type' => 'cash',
            'order_items' => [
                [
                    'product_id' => 'fef36b6d-5ba3-450c-8f39-22a75912b574',
                    'quantity' => 2.0,
                    'price' => 1500,
                    'cost' => 1500,
                    'total_cost' => 2700,
                    'discount_value' => 300,
                    'discount_percent' => 10,
                ],
            ],
            'order_history' => [
                [
                    'id' => 'c3ccc1e1-9772-4141-b01d-4e5334293cd4',
                    'user_id' => '7c2af3a7-1dd2-42b8-bb2a-ba66713ed4c5',
                    'action_type' => 'add_item',
                    'action_date' => 1478067593,
                    'details' => [
                        'product_id' => '51f3a36e-40b4-4f7f-b474-baae21e34a37',
                        'data' => 1478067593
                    ]
                ],
            ],
            'user_id' => '7c2af3a7-1dd2-42b8-bb2a-ba66713ed4c5',
            'source' => 'test',
            'specials' => ['e7bc118b-9671-40b1-bade-1207f8fd3463'],
            'banknote' => '5000',
            'type' => 'delivery',
            'order_status' => 'ordered',
            'date_delivery' => 1478067593,
            'delivery_comment' => 'test delivery comment',
            'address' => 'Нижний Новгород Столетова 6',
            'entrance' => '1',
            'floor' => '1',
            'apartment' => '15',
            'coordinates' => ['lat' => 55.31868300978734, 'lon' => 42.170031664062506],
            'phone' => '+7 (987) 1231212',
            'last_name' => '',
            'first_name' => 'Иван',
            'sex' => '1',
            'location' => 'out',
        ];

        $data = $this->client->salesOrderCreate ($options);

        $this->assertInternalType ('array', $data);

        $data = $this->client->salelOrderUpdate ($orderId, [
            'address' => 'Нижний Новгород Ленина 10',
        ]);

        $this->assertInternalType ('array', $data);
    }

    public function testSalesOrderView () {
        $data = $this->client->salesOrderView ('4ca56dbb-9cfc-46fc-90f4-41101d0d4a49');

        $this->assertInternalType ('array', $data);
    }

    public function testSalesOrderList () {
        $data = $this->client->salesOrderList ();
        $this->assertInternalType ('array', $data);
    }
}

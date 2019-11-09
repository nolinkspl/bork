<?php

namespace src\component\delivery\api\adapter;

class Turtle implements DeliveryService {

    static $name = 'TURTLE';

    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $items
     * @return array
     */
    public function calculateDelivery($senderAddress, $recipientAddress, array $items) {

        return [];
    }
}
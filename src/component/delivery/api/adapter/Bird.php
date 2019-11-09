<?php

namespace src\component\delivery\api\adapter;

use src\component\delivery\api;

class Bird implements DeliveryService {

    static $name = 'BIRD';

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
<?php

namespace src\component\delivery\api\adapter;

interface DeliveryService {

    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $items
     * @return array
     */
    public function calculateDelivery($senderAddress, $recipientAddress, array $items);
}
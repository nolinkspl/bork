<?php

namespace src\component\delivery\api\adapter;

use src\component\storage\entity\Delivery;

interface DeliveryService {

    /**
     * @param Delivery $delivery
     * @param array $items
     * @return array
     */
    public function calculateDeliveryInfo(Delivery $delivery, array $items);
}
<?php

namespace src\component\delivery\api\adapter;

use src\component\storage\entity\Delivery;

class Bird implements DeliveryService {

    const NAME = 'BIRD';

    /**
     * @param Delivery $delivery
     * @param array $items
     * @return array
     */
    public function calculateDeliveryInfo(Delivery $delivery, array $items) {
        /** @TODO make it */
        return [];
    }
}
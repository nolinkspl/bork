<?php

namespace src\component\delivery\api\adapter;

use src\component\storage\entity\Delivery;

class Turtle implements DeliveryService {

    static $name = 'TURTLE';

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
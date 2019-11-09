<?php

namespace src\component\storage;

use src\component\storage\entity;

class Facade {

    /**
     * @param string $name
     * @return entity\Delivery
     */
    public function getDeliveryByName($name) {
        return CSL::keeper()->getDeliveryByName($name);
    }

    /**
     * @return entity\Delivery[]
     */
    public function getDeliveries() {
        return CSL::keeper()->getDeliveries();
    }

    /**
     * @param int $orderId
     * @return array
     */
    public function getItemsByOrderId($orderId) {
        return CSL::keeper()->getItems(['order_id' => $orderId]);
    }
}
<?php

namespace src\component\delivery;

class Facade {

    /**
     * @param string $deliveryName
     * @param int $orderId
     * @return array
     */
    public function getCustomDeliveryInfo($deliveryName, $orderId) {
        return CSL::keeper()->getCustomDeliveryInfo($deliveryName, $orderId);
    }

    /**
     * @param int $orderId
     * @return array
     */
    public function getDeliveryInfo($orderId) {
        return CSL::keeper()->getDeliveryInfo($orderId);
    }
}
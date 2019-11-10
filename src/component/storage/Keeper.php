<?php

namespace src\component\storage;

use src\component\storage\entity;

class Keeper {

    /**
     * @param string $name
     * @return entity\Delivery
     */
    public function getDeliveryByName($name) {
        return entity\Delivery::findOne(['name' => $name]);
    }

    /**
     * @return entity\Delivery[]
     */
    public function getDeliveries() {
        return entity\Delivery::findAll();
    }

    /**
     * @param array $params
     * @return array
     */
    public function getItems(array $params) {
        return entity\Delivery::findAll($params);
    }
}
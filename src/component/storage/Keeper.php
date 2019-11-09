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
}
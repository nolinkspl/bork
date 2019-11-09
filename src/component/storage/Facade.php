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
}
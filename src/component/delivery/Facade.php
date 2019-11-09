<?php

namespace src\component\delivery;

class Facade {

    /**
     * @return array
     */
    public function getTurtleDeliveryInfo() {
        return CSL::keeper()->getTurtleDeliveryInfo();
    }

    /**
     * @return array
     */
    public function getDeliveryInfo() {
        return CSL::keeper()->getDeliveryInfo();
    }
}
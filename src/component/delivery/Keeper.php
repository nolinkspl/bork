<?php

namespace src\component\delivery;

use \src\component;

class Keeper {

    /** @var component\storage\Facade */
    private $_storage;

    public function __construct() {
        $this->_storage = DI::storageComponent();
        $this->_adapterFactory = CSL::adapterFactory();
    }

    /**
     * @return array
     */
    public function getTurtleDeliveryInfo() {
        $adapter = $this->_adapterFactory->make()
        return [];
    }

    /**
     * @return array
     */
    public function getDeliveryInfo() {
        return [];
    }
}
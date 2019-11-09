<?php

namespace src\component\delivery;

use \src\component;

class Keeper {

    /** @var component\storage\Facade */
    private $_storage;

    /** @var api\AdapterFactory */
    private $_adapterFactory;

    public function __construct() {
        $this->_storage = DI::storageComponent();
        $this->_adapterFactory = CSL::adapterFactory();
    }

    /**
     * @param string $deliveryName
     * @param int $orderId
     * @return array
     */
    public function getCustomDeliveryInfo($deliveryName, $orderId) {
        $adapter = $this->_adapterFactory->make($deliveryName);
        $delivery = $this->_storage->getDeliveryByName($deliveryName);
        $items = $this->_storage->getItemsByOrderId($orderId);

        return $adapter->calculateDeliveryInfo($delivery, $items);
    }

    /**
     * @param int $orderId
     * @return array
     */
    public function getDeliveryInfo($orderId) {
        $deliveries = $this->_storage->getDeliveries();
        $items = $this->_storage->getItemsByOrderId($orderId);

        $result = [];
        foreach ($deliveries as $delivery) {
            $adapter = $this->_adapterFactory->make($delivery->name());
            $result[] = $adapter->calculateDeliveryInfo($delivery, $items);
        }

        return $result;
    }
}
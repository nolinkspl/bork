<?php

namespace src\controller;

use src\component;

class DeliveryController extends BaseController {

    /** @var component\delivery\Facade */
    private $_deliveryComponent;

    public function __construct() {
        $this->_deliveryComponent = DI::deliveryComponent();
    }

    public function actionGetCustomDeliveryInfo() {
        return $this->callWithJsonResponse(function () {
            $deliveryName = RequestHelper::get('delivery_name');
            $orderId = RequestHelper::get('order_id');
            return $this->_deliveryComponent->getCustomDeliveryInfo($deliveryName, $orderId);
        });
    }

    public function actionGetDeliveryInfo() {
        return $this->callWithJsonResponse(function () {
            $orderId = RequestHelper::get('order_id');
            return $this->_deliveryComponent->getDeliveryInfo($orderId);
        });
    }
}
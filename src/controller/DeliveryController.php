<?php

namespace src\controller;

use src\component;

class DeliveryController extends BaseController {

    /** @var component\delivery\Facade */
    private $_deliveryComponent;

    public function __construct() {
        $this->_deliveryComponent = DI::deliveryComponent();
    }

    public function actionGetTurtleDeliveryInfo() {
        return $this->callWithJsonResponse(function () {
            return $this->_deliveryComponent->getTurtleDeliveryInfo();
        });
    }

    public function actionGetDeliveryInfo() {
        return $this->callWithJsonResponse(function () {
            return $this->_deliveryComponent->getDeliveryInfo();
        });
    }
}
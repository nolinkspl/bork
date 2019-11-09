<?php

namespace src\component\delivery\api;

use \src\component\delivery\api\adapter;

class AdapterFactory {

    /**
     * @param string $name
     * @return adapter\DeliveryService
     */
    public function make($name) {

        switch ($name) {
            case adapter\Bird::$name: return new adapter\Bird();
            case adapter\Turtle::$name: return new adapter\Turtle();
            default: return null;
        }
    }
}
<?php

namespace src\component\storage\entity;

abstract class SomeActiveRecord extends ActiveRecord {

    /**
     * @param array $params
     * @return Object
     */
    public function findOne(array $params) {
        /** returns one object */
        return null;
    }

    /**
     * @param array $params
     * @return array
     */
    public function findAll(array $params = []) {
        /** returns collection of objects */
        return [];
    }
}
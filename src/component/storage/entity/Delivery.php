<?php

namespace src\component\storage\entity;

class Delivery extends SomeActiveRecord {

    /** @var int */
    private $_id;

    /** @var string */
    private $_senderAddress;

    /** @var string */
    private $_recipientAddress;

    /** @var string */
    private $_name;

    /**
     * @return int
     */
    public function id() {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function senderAddress() {
        return $this->_senderAddress;
    }

    /**
     * @param string $senderAddress
     */
    public function setSenderAddress($senderAddress) {
        $this->_senderAddress = $senderAddress;
    }

    /**
     * @return string
     */
    public function recipientAddress() {
        return $this->_recipientAddress;
    }

    /**
     * @param string $recipientAddress
     */
    public function setRecipientAddress($recipientAddress) {
        $this->_recipientAddress = $recipientAddress;
    }

    /**
     * @return string
     */
    public function name() {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->_name = $name;
    }
}
<?php

namespace src\component\storage\entity;

class Item extends SomeActiveRecord {

    /** @var int */
    private $_id;

    /** @var string */
    private $_article;

    /** @var float */
    private $_weight;

    /** @var int */
    private $_width;

    /** @var int */
    private $_depth;

    /** @var int */
    private $_height;

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
    public function article() {
        return $this->_article;
    }

    /**
     * @param string $article
     */
    public function setArticle($article) {
        $this->_article = $article;
    }

    /**
     * @return float
     */
    public function weigth() {
        return $this->_weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight) {
        $this->_weight = $weight;
    }

    /**
     * @return int
     */
    public function width() {
        return $this->_width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width) {
        $this->_width = $width;
    }

    /**
     * @return int
     */
    public function depth() {
        return $this->_depth;
    }

    /**
     * @param int $depth
     */
    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /**
     * @return int
     */
    public function height() {
        return $this->_height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height) {
        $this->_height = $height;
    }
}

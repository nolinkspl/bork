<?php

namespace src\component\storage;

class CSL {

    /**
     * @return Keeper
     */
    static public function keeper() {
        return DI::get(Keeper::class);
    }
}
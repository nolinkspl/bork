<?php

namespace src\component\storage;

/** Component service locator */
class CSL {

    /**
     * @return Keeper
     */
    static public function keeper() {
        return DI::get(Keeper::class);
    }
}
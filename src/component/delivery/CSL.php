<?php

namespace src\component\delivery;

use src\component\delivery\api\AdapterFactory;

class CSL {

    /**
     * @return Keeper
     */
    static public function keeper() {
        return DI::get(Keeper::class);
    }

    /**
     * @return AdapterFactory
     */
    static public function adapterFactory() {
        return DI::get(AdapterFactory::class);
    }
}
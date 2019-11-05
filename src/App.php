<?php

namespace src;

use src\controller;

class App
{

    /** @var string */
    private $_route;

    /** @var string */
    private $_action;

    /** @var array */
    private $_params;

    /**
     * App constructor.
     * @param array $params
     * @throws \Exception
     */
    public function __construct(array $params)
    {
        if (!array_key_exists(1, $params)) {
            throw new \Exception('no route');
        }

        if (!array_key_exists(2, $params)) {
            throw new \Exception('no action');
        }

        $this->_route = $params[1];
        $this->_action = $params[2];
        array_splice($params, 0, 3);
        $this->_params = $params;
    }

    public function run()
    {
        $controller = new controller\WalletController();
        var_dump($controller);
        /** @TODO run action */
    }
}

/**
 * @param string $dir
 */
function includeDirectory($dir)
{
    if(!is_dir($dir)) {
     //   return;
    }
    $catalog = opendir($dir);
    $filename = readdir($catalog);

    while ($filename) {
        $filename = $dir . "/" . $filename;
        include_once($filename);
    }

    closedir($catalog);
}

try {
    includeDirectory('/vaw/www/infura/controller');
    includeDirectory('/vaw/www/infura/entity');

    $app = new App($argv);
    $app->run();
} catch (\Exception $e) {
    echo $e->getMessage();
}

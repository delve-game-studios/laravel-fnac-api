<?php

namespace Vugrinchev\LaravelFnac;

use FnacApiClient\Client\SimpleClient;

class FnacServices
{
    private $sdk;

    function __construct()
    {
        $fnac = new Fnac();
        $config = $fnac->getConfig();
        $this->sdk = new SimpleClient($config);
    }

    function __call($name, $args)
    {
        if (strpos($name, 'create') === 0) {
            // $service = 'create'.substr($name, 6);
            // $configuration = isset($args[0]) ? $args[0] : [];
            // return $this->sdk->$service($configuration);
        }
    }

}
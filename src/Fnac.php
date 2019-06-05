<?php

namespace Vugrinchev\LaravelFnac;

class Fnac
{
    private $sdk;
    private $config;

    function __construct()
    {
		$config = [
			'partner_id' => config('fnac.fnac_api_client.partner_id'),
			'shop_id' => config('fnac.fnac_api_client.shop_id'),
			'key' => config('fnac.fnac_api_client.key'),
			'host' => config('fnac.fnac_api_client.host', 'https://marketplace.ws.fd-recette.net/api.php'),
        ];

        $this->config = $config;
    }

    function getConfig() {
    	return $this->config;
    }
}

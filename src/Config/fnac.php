<?php

return [
	'fnac_api_client' => [
		'partner_id' => env('FNAC_PARTNER_ID'),
		'shop_id' => env('FNAC_SHOP_ID'),
		'key' => env('FNAC_KEY'),
		'host' => env('FNAC_HOST', 'https://marketplace.ws.fd-recette.net/api.php'),
	]
];
<?php

namespace Pay2go;

use Illuminate\Support\ServiceProvider;

class Pay2goServiceProvider extends ServiceProvider {

	public function register()
    {
		$pay2go = new Pay2goPaymentClass();
		return $pay2go;
    }

}
?>
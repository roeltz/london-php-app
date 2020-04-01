<?php

use London\HTTP\Context;
use London\HTTP\Locale\HeaderLocaleExtractor;
use London\Run\Localization;

Context::expect("created", function(){
	Localization::attach($this)
		->accept("es", "en")
		->addExtractor(new HeaderLocaleExtractor())
		->addResource("app/src/lang/{locale}.mo")
	;
});


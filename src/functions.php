<?php

namespace Silarhi;

define('HELLO_WORLD_VERSION', '1.0.1');

function hello() {
	return sprintf("Hello World v%s", HELLO_WORLD_VERSION);
}

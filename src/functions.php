<?php

/*
 * This file is part of Silarhi.
 * (c) Guillaume Sainthillier <hello@silarhi.fr>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Silarhi;

\define('HELLO_WORLD_VERSION', '1.5.0');

function hello()
{
    return sprintf('Hello World v%s', HELLO_WORLD_VERSION);
}

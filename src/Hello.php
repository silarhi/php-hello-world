<?php

/*
 * This file is part of Silarhi.
 * (c) Guillaume Sainthillier <hello@silarhi.fr>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Silarhi;

class Hello implements HelloInterface
{
    const VERSION = '1.0.3';

    public function display()
    {
        return sprintf('Hello World v%s', self::VERSION);
    }
}

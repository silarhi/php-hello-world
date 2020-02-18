<?php

/*
 * This file is part of Silarhi.
 * (c) Guillaume Sainthillier <hello@silarhi.fr>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPUnit\Framework\TestCase;
use function Silarhi\hello;

final class HelloWorldTest extends TestCase
{
    public function testHello()
    {
        $contents = hello();
        $this->assertEquals('Hello World v1.5.0', $contents);
    }
}

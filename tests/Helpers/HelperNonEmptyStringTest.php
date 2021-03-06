<?php namespace Khill\Lavacharts\Tests\Helpers;

use \Khill\Lavacharts\Tests\ProvidersTestCase;
use \Khill\Lavacharts\Helpers\Helpers as h;

class HelperNonEmptyStringTest extends ProvidersTestCase
{
    public function testWithValidString()
    {
        $this->assertTrue(h::nonEmptyString('Im not empty!'));
    }

    public function testWithEmptyString()
    {
        $this->assertFalse(h::nonEmptyString(''));
    }

    /**
     * @dataProvider nonStringProvider
     */
    public function testWithBadTypes($badTypes)
    {
        $this->assertFalse(h::nonEmptyString($badTypes));
    }
}

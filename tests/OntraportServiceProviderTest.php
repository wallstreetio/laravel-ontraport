<?php

namespace Wsio\Tests\Ontraport;

use Wsio\Ontraport\Ontraport;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class OntraportServiceProviderTest extends LaravelTestCase
{
    use ServiceProviderTrait;

    public function testOntraportIsInjectable()
    {
        $this->assertIsInjectable(Ontraport::class);
    }
}

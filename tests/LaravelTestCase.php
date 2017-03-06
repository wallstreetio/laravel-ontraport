<?php

namespace Wsio\Tests\Ontraport;

use Wsio\Ontraport\OntraportServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

class LaravelTestCase extends AbstractPackageTestCase
{
    public function getServiceProviderClass($app)
    {
        return OntraportServiceProvider::class;
    }
}

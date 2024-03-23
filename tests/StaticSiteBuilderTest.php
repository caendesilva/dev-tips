<?php

declare(strict_types=1);

namespace Hyde\Testing\Hyde;

use Hyde\Hyde;
use Hyde\Testing\TestCase;
use Illuminate\Support\Facades\File;

class StaticSiteBuilderTest extends TestCase
{
    public function testCanBuildStaticSite()
    {
        File::cleanDirectory(Hyde::path('_site'));

        $this->artisan('build')
            ->expectsOutputToContain('Building your static site!')
            ->assertExitCode(0);

        File::cleanDirectory(Hyde::path('_site'));
    }
}

<?php

declare(strict_types=1);

namespace Hyde\Testing\Hyde;

use Hyde\Hyde;
use Hyde\Testing\UnitTestCase;

class DefaultContentTest extends UnitTestCase
{
    public static function setUpBeforeClass(): void
    {
        self::needsKernel();
    }

    public function testDefaultPagesArePresent()
    {
        $this->assertFileExists(Hyde::path('_pages/index.blade.php'));
        $this->assertFileExists(Hyde::path('_pages/404.blade.php'));

        $this->assertStringContainsString(
            '<title>Welcome to HydePHP!</title>',
            file_get_contents(Hyde::path('_pages/index.blade.php'))
        );

        $this->assertStringContainsString(
            '<title>404 - Page not found</title>',
            file_get_contents(Hyde::path('_pages/404.blade.php'))
        );
    }

    public function testDefaultCompiledStylesheetIsPresent()
    {
        $this->assertFileExists(Hyde::path('_media/app.css'));

        $this->assertStringContainsString(
            'https://tailwindcss.com',
            file_get_contents(Hyde::path('_media/app.css'))
        );
    }

    public function testLaravelMixResourcesArePresent()
    {
        $this->assertFileExists(Hyde::path('resources/assets/app.css'));
        $this->assertFileExists(Hyde::path('resources/assets/app.js'));

        $this->assertFileContainsString('@tailwind base;', Hyde::path('resources/assets/app.css'));
        $this->assertFileContainsString('@tailwind components;', Hyde::path('resources/assets/app.css'));
        $this->assertFileContainsString('@tailwind utilities;', Hyde::path('resources/assets/app.css'));

        $this->assertFileContainsString('This is the main JavaScript', Hyde::path('resources/assets/app.js'));
    }

    protected function assertFileContainsString(string $string, string $file)
    {
        $this->assertStringContainsString($string, file_get_contents($file));
    }
}

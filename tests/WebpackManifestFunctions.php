<?php

namespace CarterDigital\TwigExtensions\Tests;

use PHPUnit\Framework\TestCase;

use CarterDigital\TwigExtensions\WebpackManifestFunctions;

class WebpackManifestFunctionsTest extends TestCase
{
    use Utils\TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {

        return new WebpackManifestFunctions(__DIR__ . '/utils/manifest.json');
    }

    /**
     * If an empty filepath is passed, we should raise
     * an InvalidArgumentException.
     *
     * @return void
     */
    public function testEmptyManifestFilepath()
    {
        $this->expectException(\InvalidArgumentException::class);
        new WebpackManifestFunctions('');
    }

    /**
     * If manifest file cannot be found we should raise
     * a RuntimeException.
     *
     * @return void
     */
    public function testMissingManifestJson()
    {
        $this->expectException(\RuntimeException::class);
        new WebpackManifestFunctions('does/not/exist.json');
    }

    /**
     * If manifest doesn't contain entry for $handle we
     * should raise a RuntimeException.
     *
     * @return void
     */
    public function testNoEntryInManifestJson()
    {
        $this->expectException(\RuntimeException::class);
        $this->getExtension()->getFile('not-found.css');
    }

    /**
     * If manifest contains an entry for $handle we
     * should return its value.
     *
     * @return string
     */
    public function testIsManifestFile()
    {

        $this->assertRender('/dist/app.css', $this->render('{{ manifestFile("app.css") }}'));
    }
}

<?php

namespace CarterDigital\TwigExtensions;

use PHPUnit\Framework\TestCase;

final class PHPOptionsInfoFunctionsTest extends TestCase {
    use TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {
        return new PHPOptionsInfoFunctions();
    }

    /**
     * Return an env value for the provided key
     *
     * @return string
     */
    public function testGetEnv()
    {
        $this->assertRender("<p>TEST_VALUE</p>", "<p>{{ getenv('TEST_KEY') }}</p>");
        $this->assertRender("<p></p>", "<p>{{ getenv('ANOTHER_TEST_KEY') }}</p>");
    }
}

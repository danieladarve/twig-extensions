<?php

namespace CarterDigital\TwigExtensions\Tests;

use PHPUnit\Framework\TestCase;

use CarterDigital\TwigExtensions\PHPFilesystemFunctions;

class PHPFilesystemFunctionsTest extends TestCase
{
    use Utils\TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {
        return new PHPFilesystemFunctions();
    }

    /**
     * Return the provided string back with a unique hash appended to it
     *
     * @return string
     */
    public function testPathinfo() 
    {
        $filePath = '/test.pdf';
        $testFile = pathinfo($filePath);

        $this->assertRender($testFile['dirname'], $this->render("{{ pathinfo('" . $filePath . "').dirname }}"));
        $this->assertRender($testFile['basename'], $this->render("{{ pathinfo('" . $filePath . "').basename }}"));
        $this->assertRender($testFile['extension'], $this->render("{{ pathinfo('" . $filePath . "').extension }}"));
        $this->assertRender($testFile['filename'], $this->render("{{ pathinfo('" . $filePath . "').filename }}"));
    }
}
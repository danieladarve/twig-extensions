<?php

namespace CarterDigital\TwigExtensions;

use PHPUnit\Framework\TestCase;

class PHPPCREFunctionsTest extends TestCase
{
    use TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {
        return new PHPPCREFunctions();
    }

    /**
     * Return the provided string back with a unique hash appended to it
     *
     * @return string
     */
    public function testUniqueId() 
    {
        $this->assertRender(0, $this->render('{{ isEnglish("тест") }}'));
        $this->assertRender(1, $this->render('{{ isEnglish("test") }}'));
    }
}
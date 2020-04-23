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
     * Return true or false depending on whether a provided string is a latin string
     *
     * @return string
     */
    public function testIsEnglish() 
    {
        $this->assertRender(0, $this->render('{{ isEnglish("тест") }}'));
        $this->assertRender(1, $this->render('{{ isEnglish("test") }}'));
    }
}
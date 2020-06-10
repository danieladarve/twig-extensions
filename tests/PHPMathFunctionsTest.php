<?php

namespace CarterDigital\TwigExtensions\Tests;

use PHPUnit\Framework\TestCase;

use CarterDigital\TwigExtensions\PHPMathFunctions;

class PHPMathFunctionsTest extends TestCase 
{
    use Utils\TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {
        return new PHPMathFunctions();
    }

    /**
     * Return the provided string back with a unique hash appended to it
     *
     * @return string
     */
    public function testUniqueId() 
    {
        $this->assertTrue(is_numeric($this->render('{{ uniqueId() }}')));
        $this->assertTrue(!is_numeric($this->render('{{ uniqueId("id-") }}')));
        $this->assertTrue(strcmp($this->render('{{ uniqueId() }}'), $this->render('{{ uniqueId() }}')) !== 0);
    }
}
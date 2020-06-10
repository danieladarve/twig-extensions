<?php

namespace CarterDigital\TwigExtensions\Tests;

use PHPUnit\Framework\TestCase;

use CarterDigital\TwigExtensions\PHPStringFunctions;

class PHPStringFunctionsTest extends TestCase
{
    use Utils\TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {
        return new PHPStringFunctions();
    }

    /**
     * Return the md5ed string
     *
     * @return string
     */
    public function testIsmd5ed() 
    {
        $text = 'test';

        $this->assertRender(md5($text), $this->render('{{ md5("' . $text . '") }}'));
    }
}
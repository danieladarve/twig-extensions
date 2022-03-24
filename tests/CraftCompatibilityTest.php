<?php

namespace CarterDigital\TwigExtensions\Tests;

use PHPUnit\Framework\TestCase;

use CarterDigital\TwigExtensions\CraftCompatibility;

class CraftCompatibilityTest extends TestCase
{
    use Utils\TestHelpers;

    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    protected function getExtension()
    {
        return new CraftCompatibility();
    }

    /**
     * Return the provided string back with a unique hash appended to it
     *
     * @return string
     */
    public function testCompatibilityMethods() 
    {
        $this->assertRender('123', $this->render("{{ '123'|t }}"));
    }

}
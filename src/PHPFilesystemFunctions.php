<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PHPFilesystemFunctions extends AbstractExtension
{    
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/php-filesystem-functions';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('pathinfo', [$this, 'getPathinfo'])
        ];
    }

    /**
     * Return passed string with a unique hash appended to it
     *
     * @param string $text
     * @return string
     */
    public function getPathinfo($file)
    {
        $result = pathinfo($file);

        return $result;
    }
}
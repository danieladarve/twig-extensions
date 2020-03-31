<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PHPMathFunctions extends AbstractExtension
{
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/php-math-functions';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('uniqueId', [$this, 'generateUniqueId'])
        ];
    }

    /**
     * Return passed string with a unique hash appended to it
     *
     * @return string
     */
    public function generateUniqueId($text = null)
    {
        $result = $text . rand();

        return $result;
    }

}
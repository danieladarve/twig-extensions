<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PHPStringFunctions extends AbstractExtension
{
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/php-string-functions';
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('md5', [$this, 'md5'])
        ];
    }

    /**
     * md5s the string
     *
     * @param string $text
     * @return string
     */
    public function md5($text) {
        return md5($text);
    }
}
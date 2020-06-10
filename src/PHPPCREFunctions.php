<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PHPPCREFunctions extends AbstractExtension
{
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/php-pcre-functions';
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('isEnglish', [$this, 'isEnglish'])
        ];
    }

    /**
     * Checks a string for having alphanumeric latin symbols
     *
     * @param string $text
     * @return string
     */
    public function isEnglish($text = null) {
        return preg_match('/[A-Za-z0-9]/', $text);
    }
}
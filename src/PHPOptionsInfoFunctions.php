<?php

namespace CarterDigital\TwigExtensions;

use Dotenv\Dotenv;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Functions from https://www.php.net/manual/en/ref.info.php
 */
class PHPOptionsInfoFunctions extends AbstractExtension {   
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/php-options-info-functions';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('getenv', [$this, 'getEnv'])
        ];
    }

    /**
     * Return an env value for the provided key
     *
     * @return string
     */
    public function getEnv($key) {
        $dotenv = Dotenv::create('./');
        $dotenv->load();

        return getenv($key);
    }
}
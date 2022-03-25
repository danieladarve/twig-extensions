<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CraftCompatibility extends AbstractExtension
{
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/craft-compatibility';
    }

    /**
     * @inheritdoc
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('t', [$this, 'translateFilter']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('svg', [$this, 'svgFunction']),
        ];
    }

    /**
     * svg function replication.
     *
     * @param string $filepath
     * @return string
     */
    public function svgFunction($filepath): string
    {
        return file_get_contents($filepath);
    }

    /**
     * |t filter placeholder.
     *
     * @param string $message
     * @return string
     */
    public function translateFilter($message): string
    {
        return $message;
    }
}
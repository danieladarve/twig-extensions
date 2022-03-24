<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

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
     * |t filter placeholder.
     *
     * @param string $message
     * @return string
     */
    public function translateFilter($message)
    {
        return $message;
    }
}
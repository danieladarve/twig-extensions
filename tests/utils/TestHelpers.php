<?php

namespace CarterDigital\TwigExtensions;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Helper methods for unit tests
 * Source: https://github.com/jasny/twig-extensions/blob/master/tests/support/TestHelper.php
 */
trait TestHelpers
{
    /**
     * Get the tested extension
     *
     * @return \Twig\Extension\AbstractExtension;
     */
    abstract protected function getExtension();

    /**
     * Build the Twig environment for the template
     *
     * @param string $template
     * @return \Twig\Environment
     */
    protected function buildEnv($template)
    {
        $loader = new ArrayLoader([
            'template' => $template,
        ]);
        $twig = new Environment($loader);

        $twig->addExtension($this->getExtension());

        return $twig;
    }

    /**
     * Render template
     *
     * @param string $template
     * @param array $data
     * @return string
     */
    protected function render($template, array $data = [])
    {
        $twig = $this->buildEnv($template);
        $result = $twig->render('template', $data);

        return $result;
    }

    /**
     * Render template and assert equals
     *
     * @param string $expected
     * @param string $template
     * @param array  $data
     */
    protected function assertRender($expected, $template, array $data = [])
    {
        $result = $this->render($template, $data);

        $this->assertEquals($expected, (string)$result);
    }
}
<?php

namespace CarterDigital\TwigExtensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Defines a function to get the public path of a webpack asset from
 * the asset manifest.
 *
 * This should be used in conjunction with WebpackManifestPlugin.
 *
 * See: https://github.com/shellscape/webpack-manifest-plugin
 */
class WebpackManifestFunctions extends AbstractExtension
{
    /**
     * The full path to the manifest.json to check for asset paths.
     *
     * @var str
     */
    protected $manifestFilepath;

    /**
     * Provide path to manifest json file and verify that it exists.
     *
     * @param string $manifestFilepath
     *
     * @throws InvalidArgumentException   Throws if no path to manifest file has been provided.
     * @throws RuntimeException           Throws if the manifest file doesn't exist.
     */
    public function __construct(string $manifestFilepath)
    {
        if (empty($manifestFilepath)) {
            throw new \InvalidArgumentException("Manifest file path cannot be null or empty");
        };

        if (!file_exists($manifestFilepath)) {
            throw new \RuntimeException("The manifest.json file could not be found at '$manifestFilepath'!\n You might need to run a front end asset build, or check that the supplied file path to manifest is correct.");
        }

        $this->manifestFilepath = $manifestFilepath;
    }

    /**
     * Return extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'carter-digital/webpack-manifest-functions';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('manifestFile', [$this, 'getFile'])
        ];
    }

    /**
     * Check manifest for asset with `$handle` and return its public path.
     *
     * @param string $handle
     * @return string|bool
     *
     * @throws RuntimeException   Throws if manifest file doesn't have a
     *                            corresponding entry for `$handle`.
     */
    public function getFile($handle)
    {
        $file = file_get_contents(strval($this->manifestFilepath));
        $manifest = json_decode($file, true);

        if (!array_key_exists($handle, $manifest)) {
            throw new \RuntimeException("The manifest.json file does not contain a reference to '$handle'.\n Verify that '$this->manifestFilepath' contains an entry for '$handle'.");
        }

        return $manifest[$handle];
    }
}

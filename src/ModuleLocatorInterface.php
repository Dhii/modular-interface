<?php

namespace Dhii\Modular;

/**
 * Something that can locate and retrieve module configuration.
 *
 * Unlike factories and loaders, locators are expected to be configured and consist of all the required data prior to
 * locating modules. This makes locators more single-purpose specific and disposable than the aforementioned entities.
 *
 * @since [*next-version*]
 */
interface ModuleLocatorInterface
{
    /**
     * Locates and retrieves module configuration.
     *
     * @since [*next-version*]
     *
     * @return array The located module configuration as an associative array of module IDs as array keys.
     *               Array values represent the found module configuration which may be arrays themselves.
     */
    public function locate();
}

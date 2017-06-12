<?php

namespace Dhii\Modular\Locator;

/**
 * Something that can locate and retrieve module configuration.
 *
 * Unlike factories and loaders, locators are expected to be configured and consist of all the required data prior to
 * locating modules. This makes locators single-purpose specific and disposable.
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
     * @throws ModuleLocatorExceptionInterface If something went wrong while locating.
     *
     * @return array The located module configurations. Each configuration is an associative array.
     *               No particular order or key format.
     */
    public function locate();
}

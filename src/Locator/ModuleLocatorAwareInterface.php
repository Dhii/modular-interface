<?php

namespace Dhii\Modular\Locator;

/**
 * Something can have a module locator retrieved.
 *
 * @since [*next-version*]
 */
interface ModuleLocatorAwareInterface
{
    /**
     * Retrieves the module locator associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ModuleLocatorInterface| null The locator, if applicable;
     *                                 otherwise null.
     */
    public function getModuleLocator();
}

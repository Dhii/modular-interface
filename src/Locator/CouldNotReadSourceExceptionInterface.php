<?php

namespace Dhii\Modular\Locator;

use Dhii\Modular\Config\ConfigSourceAwareInterface;

/**
 * Represents an exception which occurs if a module locator is unable to read module configuration from a configuration source.
 *
 * @since [*next-version*]
 */
interface CouldNotReadSourceExceptionInterface extends
    ConfigSourceAwareInterface,
    ModuleLocatorExceptionInterface
{
}

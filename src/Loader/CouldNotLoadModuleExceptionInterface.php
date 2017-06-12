<?php

namespace Dhii\Modular\Loader;

use Dhii\Modular\Module\ModuleAwareInterface;

/**
 * Represents an exception which occurs if a module cannot be loaded.
 *
 * @since [*next-version*]
 */
interface CouldNotLoadModuleExceptionInterface extends
    ModuleLoaderExceptionInterface,
    ModuleAwareInterface
{
}

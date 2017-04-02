<?php

namespace Dhii\Modular;

use Traversable;

/**
 * Something that can load modules.
 *
 * Loading should ideally be mostly determined by the module type.
 *
 * Since a module is a generic concept, its use can vary from as simple as representing a file to be loaded to a
 * complete sub-system that requires a substantial amount of initialisation.
 *
 * As such, implementors are encouraged to respect the different module types that can exist and load them accordingly.
 *
 * @since [*next-version*]
 */
interface ModuleLoaderInterface
{
    /**
     * Loads the given module or collection of modules.
     *
     * @since [*next-version*]
     *
     * @param ModuleInterface[]|Traversable $modules A collection of modules. Default: array()
     */
    public function load($modules = array());
}

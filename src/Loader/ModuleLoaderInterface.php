<?php

namespace Dhii\Modular\Loader;

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
     * Loads a list of modules.
     *
     * The load order will be exactly as provided in the list.
     * Will call `load()` on each module.
     *
     * @since [*next-version*]
     *
     * @param ModuleInterface[]|Traversable $modules A list of modules.
     *
     * @throws CouldNotLoadModuleExceptionInterface If a module could not be loaded.
     * @throws ModuleLoaderExceptionInterface       If some other failure occurs.
     */
    public function load($modules = array());
}

<?php

namespace Dhii\Modular\Loader;

/**
 * Something that can have a module instance retrieved.
 *
 * @since [*next-version*]
 */
interface ModuleLoaderAwareInterface
{
    /**
     * Retrieves the loader associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ModuleLoaderInterface|null The loader instance, if applicable;
     *                                    otherwise, null.
     */
    public function getModuleLoader();
}

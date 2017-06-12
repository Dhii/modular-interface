<?php

namespace Dhii\Modular\Factory;

/**
 * Something that can have a module factory retrieved.
 *
 * @since [*next-version*]
 */
interface ModuleFactoryAwareInterface
{
    /**
     * Retrieves the module factory associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ModuleFactoryInterface|null The factory instance, if applicable;
     *                                     null otherwise.
     */
    public function getModuleFactory();
}

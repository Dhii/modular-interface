<?php

namespace Dhii\Modular\Factory;

/**
 * Something that can create module instances.
 *
 * The factory is not limited to creating modules of a single type. In fact the non-deterministic nature of a factory
 * can be useful in a system that can handle different module types in specific ways.
 *
 * Furthermore, since a module is generic concept and only requires identification, only the ID is required for a module
 * to be instantiated. Implementors are encouraged to document what config data results in what module types.
 *
 * @since [*next-version*]
 */
interface ModuleFactoryInterface
{
    /**
     * Creates a module based on its configuration.
     *
     * @since [*next-version*]
     *
     * @param array[] $config A module configuration.
     *
     * @return ModuleInterface The new module
     */
    public function makeModule($config);
}

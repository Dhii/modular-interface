<?php

namespace Dhii\Modular;

use Dhii\Data\StringableInterface as Stringable;

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
     * Creates a module instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $id     The ID of the module to create.
     * @param array             $config An array of additional configuration. Default: array()
     *
     * @return ModuleInterface
     */
    public function make($id, array $config = array());
}

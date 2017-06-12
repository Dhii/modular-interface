<?php

namespace Dhii\Modular\Module;

/**
 * Something that can have a module code retrieved.
 *
 * @since [*next-version*]
 */
interface ModuleCodeAwareInterface
{
    /**
     * Retrieves the module code associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|null The code, if applicable; otherwise, null.
     */
    public function getModuleCode();
}

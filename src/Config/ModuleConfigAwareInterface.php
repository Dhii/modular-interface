<?php

namespace Dhii\Modular\Config;

/**
 * Something that can have module configuration retrieved.
 *
 * @since [*next-version*]
 */
interface ModuleConfigAwareInterface
{
    /**
     * Retrieves module configuration associated with this instance.
     *
     * @since [*next-version*]
     * 
     * @return array|null The module configuration, if applicable; null otherwise.
     */
    public function getModuleConfig();
}

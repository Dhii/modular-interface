<?php

namespace Dhii\Modular\Config;

/**
 * Something that is aware of a configuration source.
 *
 * @since [*next-version*]
 */
interface ConfigSourceAwareInterface
{
    /**
     * Retrieves the configuration source representation.
     *
     * @since [*next-version*]
     *
     * @return mixed The source.
     */
    public function getConfigSource();
}

<?php

namespace Dhii\Modular\Locator;

/**
 * Represents an exception which occurs if a module locator is unable to read module configuration from a configuration source.
 *
 * @since [*next-version*]
 */
interface CouldNotReadSourceExceptionInterface
{
    /**
     * Retrieves the problematic configuration source.
     *
     * @since [*next-version*]
     *
     * @return mixed The configuration source.
     */
    public function getConfigSource();
}

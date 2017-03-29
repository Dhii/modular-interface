<?php

namespace Dhii\Modular;

use Dhii\Data\IdAwareInterface;

/**
 * Anything that represents a system module.
 *
 * A module is represented by an ID, which is not limited to any type or form. It can be numeric, a slug, a hash or
 * even a user-friendly name. What matters is that it **uniquely** identifies the module.
 *
 * @since [*next-version*]
 */
interface ModuleInterface extends IdAwareInterface
{
}

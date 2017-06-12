<?php

namespace Dhii\Modular\Factory;

use Dhii\Modular\Module\ModuleKeyAwareInterface;
use Dhii\Modular\Config\ModuleConfigAwareInterface;

/**
 * An exception which occurs if a module factory is unable to create a module.
 *
 * @since [*next-version*]
 */
interface CouldNotMakeModuleExceptionInterface extends
    ModuleFactoryExceptionInterface,
    ModuleKeyAwareInterface,
    ModuleConfigAwareInterface
{
}

<?php

namespace Dhii\Modular\UnitTest\Loader;

use Dhii\Modular\Loader\ModuleLoaderAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Loader\ModuleLoaderAwareInterface}.
 *
 * @since [*next-version*]
 */
class ModuleLoaderAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Loader\\ModuleLoaderAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleLoaderAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getModuleLoader()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created'
        );
    }
}

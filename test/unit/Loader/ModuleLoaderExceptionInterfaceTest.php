<?php

namespace Dhii\Modular\UnitTest\Loader;

use Dhii\Modular\Loader\ModuleLoaderExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Loader\ModuleLoaderExceptionInterface}.
 *
 * @since [*next-version*]
 */
class ModuleLoaderExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Loader\\ModuleLoaderExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleLoaderExceptionInterface
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
        $this->assertInstanceOf(
            'Dhii\\Modular\\Loader\\ModuleLoaderAwareInterface', $subject, 'Subject does not implement reqired interface'
        );
    }
}

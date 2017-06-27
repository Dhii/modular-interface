<?php

namespace Dhii\Modular\UnitTest\Loader;

use Dhii\Modular\Loader\CouldNotLoadModuleExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Loader\CouldNotLoadModuleExceptionInterface}.
 *
 * @since [*next-version*]
 */
class CouldNotLoadModuleExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Loader\\CouldNotLoadModuleExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return CouldNotLoadModuleExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getModuleLoader()
            ->getModule()
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
            'Dhii\\Modular\\Loader\\ModuleLoaderExceptionInterface', $subject, 'Subject does not implement reqired interface'
        );
        $this->assertInstanceOf(
            'Dhii\\Modular\\Module\\ModuleAwareInterface', $subject, 'Subject does not implement reqired interface'
        );
    }
}

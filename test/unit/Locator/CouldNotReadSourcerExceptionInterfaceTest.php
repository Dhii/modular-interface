<?php

namespace Dhii\Modular\UnitTest\Locator;

use Dhii\Modular\Locator\CouldNotReadSourceExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Locator\CouldNotReadSourceExceptionInterface}.
 *
 * @since [*next-version*]
 */
class CouldNotReadSourcerExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Locator\\CouldNotReadSourceExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return CouldNotReadSourceExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getConfigSource()
            ->getModuleLocator()
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
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created'
        );
        $this->assertInstanceOf(
            'Dhii\\Modular\\Locator\\ModuleLocatorExceptionInterface', $subject, 'Subject does not implement reqired interface'
        );
        $this->assertInstanceOf(
            'Dhii\\Modular\\Config\\ConfigSourceAwareInterface', $subject, 'Subject does not implement reqired interface'
        );
    }
}

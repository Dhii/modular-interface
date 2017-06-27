<?php

namespace Dhii\Modular\UnitTest\Locator;

use Dhii\Modular\Locator\ModuleLocatorExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Locator\ModuleLocatorExceptionInterface}.
 *
 * @since [*next-version*]
 */
class ModuleLocatorExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Locator\\ModuleLocatorExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleLocatorExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
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
            'Dhii\\Modular\\Locator\\ModuleLocatorAwareInterface', $subject, 'Subject does not implement reqired interface'
        );
    }
}

<?php

namespace Dhii\Modular\UnitTest\Locator;

use Dhii\Modular\Locator\ModuleLocatorAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Locator\ModuleLocatorAwareInterface}.
 *
 * @since [*next-version*]
 */
class ModuleLocatorAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Locator\\ModuleLocatorAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleLocatorAwareInterface
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
            'Subject is not a valid instance.'
        );
    }
}

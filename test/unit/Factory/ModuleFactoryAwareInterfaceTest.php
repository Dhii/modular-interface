<?php

namespace Dhii\Modular\UnitTest\Factory;

use Dhii\Modular\Factory\ModuleFactoryAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Factory\ModuleFactoryAwareInterface}.
 *
 * @since [*next-version*]
 */
class ModuleFactoryAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Factory\\ModuleFactoryAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleFactoryAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getModuleFactory()
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
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );
    }
}

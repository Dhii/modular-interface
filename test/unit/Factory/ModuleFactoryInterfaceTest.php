<?php

namespace Dhii\Modular\UnitTest\Factory;

use Dhii\Modular\Factory\ModuleFactoryInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Factory\ModuleFactoryInterface}.
 *
 * @since [*next-version*]
 */
class ModuleFactoryInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Factory\\ModuleFactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleFactoryInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->makeModule()
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

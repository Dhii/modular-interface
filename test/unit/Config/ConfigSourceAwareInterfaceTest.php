<?php

namespace Dhii\Modular\UnitTest\Config;

use Dhii\Modular\Config\ConfigSourceAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\Config\ConfigSourceAwareInterface}.
 *
 * @since [*next-version*]
 */
class ConfigSourceAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\Config\\ConfigSourceAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ConfigSourceAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getConfigSource()
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

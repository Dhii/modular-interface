<?php

namespace Dhii\Modular\FuncTest;

use Dhii\Modular\ModuleInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Modular\ModuleInterface}.
 *
 * @since [*next-version*]
 */
class ModuleInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Modular\\ModuleInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getId()
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

        $this->assertInstanceOf(
            'Dhii\\Data\\IdAwareInterface',
            $subject,
            'Subject is not a valid IdAwareInterface instance.'
        );
    }
}

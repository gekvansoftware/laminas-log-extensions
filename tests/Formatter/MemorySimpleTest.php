<?php

declare(strict_types=1);

namespace Slam\Zend\Log\Tests\Formatter;

use PHPUnit\Framework\TestCase;
use Slam\Zend\Log\Formatter\MemorySimple;
use Zend\Log\Formatter\Simple as ZendSimple;

/**
 * @covers \Slam\Zend\Log\Formatter\MemorySimple
 */
final class MemorySimpleTest extends TestCase
{
    public function testInit()
    {
        $formatter = new MemorySimple();

        $this->assertInstanceOf(ZendSimple::class, $formatter);
        $this->assertNotNull($formatter->format(array()));
    }
}

<?php

/**
 * (c) Jan Dommasch <jan.dommasch297@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Jd297\Psr\Clock\Test;

use Jd297\Psr\Clock\StaticClock;
use PHPUnit\Framework\TestCase;
use Psr\Clock\ClockInterface;

class StaticClockTest extends TestCase
{
    public function testStaticClockImplementsPsrContainerInterface(): void
    {
        $this->assertInstanceOf(ClockInterface::class, new StaticClock());
    }

    public function testStaticClockNowMethodWithSpecificTimeStamp1000000000(): void
    {
        $clock = new StaticClock('2001-09-09 01:46:40.000000');

        $this->assertEquals(1000000000, $clock->now()->getTimestamp());
        $this->assertEquals(1000000000, $clock->now()->getTimestamp());
    }

    public function testStaticClockNowMethodWithSpecificTimeStamp2000000000(): void
    {
        $clock = new StaticClock('2033-05-18 03:33:20.000000');

        $this->assertEquals(2000000000, $clock->now()->getTimestamp());
        $this->assertEquals(2000000000, $clock->now()->getTimestamp());
    }
}

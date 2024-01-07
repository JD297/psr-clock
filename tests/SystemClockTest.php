<?php

/**
 * (c) Jan Dommasch <jan.dommasch297@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Jd297\Psr\Clock\Test;

use DateTimeImmutable;
use Jd297\Psr\Clock\SystemClock;
use PHPUnit\Framework\TestCase;
use Psr\Clock\ClockInterface;

class SystemClockTest extends TestCase
{
    public function testSystemClockImplementsPsrContainerInterface(): void
    {
        $this->assertInstanceOf(ClockInterface::class, new SystemClock());
    }

    public function testStaticClockNowMethodWithSpecificTimeStamp2000000000(): void
    {
        $clock = new SystemClock();

        $this->assertEquals(true, ($clock->now()->getTimestamp() - (new DateTimeImmutable())->getTimestamp()) <= 0);
        $this->assertEquals(true, ($clock->now()->getTimestamp() - (new DateTimeImmutable())->getTimestamp()) >= -1);
    }
}

<?php

/**
 * (c) Jan Dommasch <jan.dommasch297@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Jd297\Psr\Clock;

use DateTimeImmutable;
use DateTimeZone;
use Exception;
use Psr\Clock\ClockInterface;

class StaticClock implements ClockInterface
{
    public function __construct(
        private readonly string $datetime = 'now',
        private readonly ?DateTimeZone $timezone = null
    ) {
    }

    /**
     * @throws Exception
     */
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable($this->datetime, $this->timezone);
    }
}

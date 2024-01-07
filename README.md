# psr-clock (PSR-20)

Simple implementation of [PSR-20 (Clock)](https://www.php-fig.org/psr/psr-20/).

## Requirements

The following versions of PHP are supported by this version.

* PHP ^8.1

## Usage

All clocks are implementing the _Psr\Clock\ClockInterface_.

### SystemClock

The _SystemClock_ just gives the current time according to your system.

```php
use Jd297\Psr\Clock\SystemClock;

$clock = new SystemClock();

$unixTimestamp = $clock->now()->getTimestamp();
```

### StaticClock

The _StaticClock_ is suitable for mocking your application.

```php
use Jd297\Psr\Clock\StaticClock;

$clock = new StaticClock('2001-09-09 01:46:40.000000');

$unixTimestamp = $clock->now()->getTimestamp(); // 1000000000
```

## Composer

### Scripts

Reformat code with [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer).
``` bash
$ composer reformat
```

Test source code with [PHPUnit](https://github.com/sebastianbergmann/phpunit).
``` bash
$ composer unit
```

Analyse files with [PHPStan](https://github.com/phpstan/phpstan) (Level 9).
``` bash
$ composer analyse
```

## License

The BSD 2-Clause "Simplified" License (BSD-2-Clause). Please see [License File](https://github.com/jd297/psr-clock/blob/master/LICENSE) for more information.

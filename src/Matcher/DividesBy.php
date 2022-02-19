<?php

declare (strict_types = 1);

namespace App\Matcher;

use InvalidArgumentException;

class DividesBy implements MatcherInterface {
    public function match(int $value, mixed $against): bool {
        if (!is_int($against)) {
            throw new InvalidArgumentException('Against must be an integer');
        }
        return $value % $against === 0;
    }
}

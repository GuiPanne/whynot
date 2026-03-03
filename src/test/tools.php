<?php

namespace Whynot;

use Success;

class Tools{
    protected function isShorterString(string $a, string $b): void{
        if(!(strlen($a) < strlen($b))){
            throw new SizeFail(strlen($a), )
        }
    }
    protected function isLongerString(string $a, string $b): bool{
        return strlen($a) > strlen($b);
    }
    protected function isEqualString(string $a, string $b): bool{
        return strlen($a) === strlen($b);
    }
    protected function isEqualInt(int $a, int $b): bool{
        return $a === $b;
    }
    protected function isEqualFloat(float $a,float $b): bool{
        return $a === $b;
    }
    protected function isEqualStrictObject(object $a, object $b): bool{
        return $a === $b;
    }
    protected function isEquivalentObject(object $a, object $b): bool{
        return $a == $b;
    }
    protected function isShorterArray(array $a, array $b): bool{
        return count($a) < count($b);
    }
    protected function isLongerArray(array $a, array $b): bool{
        return count($a) > count($b);
    }
    protected function isEqualArray(array $a, array $b): bool{
        return count($a) === count($b);
    }
    protected function isNull(mixed $a): bool{
        return is_null($a);
    }
    protected function isNotNull(mixed $a): bool{
        return !is_null($a);
    }
    protected function isEmptyArray(array $a): bool{
        return empty($a);
    }
    protected function isNotEmptyArray(array $a): bool{
        return !empty($a);
    }

    protected function isTrue(bool $a): bool{
        return $a === true;
    }

    protected function isFalse(bool $a): bool{
        return $a === false;
    }
}
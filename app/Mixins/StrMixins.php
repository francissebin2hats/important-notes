<?php

namespace App\Mixins;

use Illuminate\Support\Str;

class StrMixins
{
    public function preFIxTestOne()
    {
        return function ($string) {
            return 'From mixin Test1-' . $string;
        };
    }

    public function preFIxTestTwo()
    {
        return function ($string) {
            return 'From mixin Test2-' . $string;
        };
    }
}

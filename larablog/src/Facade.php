<?php

namespace WilliamBeeler\LaraBlog;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return LaraBlog::class;
    }
}

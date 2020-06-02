<?php
namespace Oh86\LaravelTest\Facade;

use Illuminate\Support\Facades\Facade;
use \Oh86\LaravelTest\Lib\Test;

class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Test::class;
    }
}
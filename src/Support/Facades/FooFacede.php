<?php 

namespace Okasuke\FooPackage\Support\Facades;

use Illuminate\Support\Facades\Facade;

class FooFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'foo';
    }
}

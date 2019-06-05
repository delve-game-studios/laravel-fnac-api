<?php
/**
 * Created by PhpStorm.
 * User: haroonkhan
 * Date: 5/22/17
 * Time: 3:19 PM
 */

namespace Vugrinchev\LaravelFnac\Facade;


use Illuminate\Support\Facades\Facade;

class Fnac extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fnac';
    }
}
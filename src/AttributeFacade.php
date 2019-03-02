<?php

namespace Azizbekeshonaliyev\Attribute;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Azizbekeshonaliyev\Attribute\Skeleton\SkeletonClass
 */
class AttributeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'attribute';
    }
}

<?php

namespace App\Traits;

use App\Observers\UniverseObserver;
use Illuminate\Support\Facades\Event;

trait UniverseTrait
{
      public static function bootUniverseTrait()
      {
            static::observe(new UniverseObserver);
      }
}

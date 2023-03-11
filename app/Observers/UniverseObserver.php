<?php

namespace App\Observers;

use App\Events\ModelCreatedEvent;
use App\Events\ModelDeletedEvent;
use App\Events\ModelUpdatedEvent;
use App\Models\Model;

class UniverseObserver
{
    /**
     * Handle the Model "created" event.
     */
    public function created($model): void
    {
        ModelCreatedEvent::dispatch($model);
    }

    /**
     * Handle the Model "updated" event.
     */
    public function updated($model)
    {
        ModelUpdatedEvent::dispatch($model);
    }

    /**
     * Handle the Model "deleted" event.
     */
    public function deleted($model)
    {
        ModelDeletedEvent::dispatch($model);
    }
}

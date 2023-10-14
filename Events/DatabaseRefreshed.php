<?php

namespace QuantaForge\Database\Events;

use QuantaForge\Contracts\Database\Events\MigrationEvent as MigrationEventContract;

class DatabaseRefreshed implements MigrationEventContract
{
    /**
     * Create a new event instance.
     *
     * @param  string|null  $database
     * @param  bool  seeding
     * @return void
     */
    public function __construct(
        public ?string $database = null,
        public bool $seeding = false
    ) {
        //
    }
}

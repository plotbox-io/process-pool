<?php

namespace ProcessPool\Events;

class ProcessStarted extends ProcessEvent
{
    public function getName(): string
    {
        return static::PROCESS_STARTED;
    }
}

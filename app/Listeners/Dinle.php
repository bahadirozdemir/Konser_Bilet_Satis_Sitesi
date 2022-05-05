<?php

namespace App\Listeners;

use App\Events\Ekle;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
class Dinle
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Ekle  $event
     * @return void
     */
    public function handle(Ekle $event)
    {
      
    }
}

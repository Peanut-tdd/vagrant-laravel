<?php

namespace App\Listeners;

use App\Events\test1;
use App\Events\test2;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class TestEventSubscribe
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }


    public  function handleTest1(){
        Log::info("handleTest1:",[11111]);
    }



    public function  handleTest2(){
        Log::info("handleTest2:",[22222]);
    }


    public function subscribe($events){
        $events->listen(
            \App\Events\test1::class,
            "App\Listeners\TestEventSubscribe@handleTest1"
        );

        $events->listen(
            \App\Events\test2::class,
            "App\Listeners\TestEventSubscribe@handleTest2"
        );
    }
}

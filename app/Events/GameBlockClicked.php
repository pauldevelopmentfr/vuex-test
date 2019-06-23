<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class GameBlockClicked implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $block;
    
    /**
     * Create a new event instance.
     *
     * @param $block
     *
     * @return void
     */
    public function __construct($block)
    {
        $this->block = $block;
    }

    /**
    * Get the channels the event should broadcast on.
    *
    * @return \Illuminate\Broadcasting\Channel|array
    */

    public function broadcastOn()
    {
        return new Channel('blockClicked');
    }

    public function broadcastAs()
    {
        return 'block-clicked';
    }
}

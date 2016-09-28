<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserChangedActiveCell implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $rowIndex;
    public $columnIndex;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($rowIndex, $columnIndex)
    {
        $this->rowIndex = $rowIndex;
        $this->columnIndex = $columnIndex;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('clicked-cell-channel');
    }
}

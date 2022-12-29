<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TradeServiceStatusChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $trade_id;
    public $service_name;
    public $service;
    public $user_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($trade_id, $service_name, $service, $user_id)
    {
        $this->trade_id = $trade_id;
        $this->service_name = $service_name;
        $this->service = $service;
        $this->user_id = $user_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

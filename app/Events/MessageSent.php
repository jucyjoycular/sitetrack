<?php

namespace App\Events;

use App\Models\Message;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $message;

    /**
     * Create a new event instance.
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }


    public function broadcastOn()
    {
       return new PrivateChannel('live-chat'.$this->message->to);
    }

    public function broadcastAs()
    {
        return 'new-chat-message';
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
        ];
    }
}

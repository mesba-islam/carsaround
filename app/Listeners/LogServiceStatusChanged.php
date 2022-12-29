<?php

namespace App\Listeners;

use App\Events\TradeServiceStatusChanged;
use App\Models\TradeServiceStatus;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\QueryException;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogServiceStatusChanged
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
     * @param  \App\Events\TradeServiceStatusChanged  $event
     * @return void
     */
    public function handle(TradeServiceStatusChanged $event)
    {
        try {
            TradeServiceStatus::create([
                'trade_id' => $event->trade_id,
                'service' => $event->service_name,
                'status' => $event->service->status,
                'changed_by' => $event->user_id,
            ]);
        } catch (QueryException $e) {
            Log::error($e->getMessage(). " happened on trade service status change event");
        } catch (Exception $e) {
            Log::error($e->getMessage(). " happened on trade service status change event");
        }

    }
}

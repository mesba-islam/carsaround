<?php

namespace App\Http\Controllers\Order;

use App\Helpers\NameConversionHelper;
use App\Http\Controllers\Controller;
use App\Models\Trade;
use Illuminate\Http\Request;

class TradeDetailsController extends Controller
{
    public function show(Trade $trade, NameConversionHelper $nameConversionHelper)
    {
        $trade->load('trade_vehicle', 'buyer:id,first_name,middle_name,last_name', 'seller:id,first_name,middle_name,last_name', 'safe_settlements:trade_id,status', 'trade_transports:trade_id,status', 'trade_finances:trade_id,status', 'trade_inspections:trade_id,status');

        return view('order.trade-details.show', ['trade' => $trade, 'nameConversionHelper' => $nameConversionHelper]);
    }

    public function showInspection(Trade $trade)
    {
        $trade->load('trade_inspections.instruction');
        $trade->service_statuses = $trade->get_specific_service_statuses('inspection');

        return view('order.trade-details.show-inspection', ['trade' => $trade]);
    }

    public function showFinance(Trade $trade)
    {
        $trade->load('trade_finances.instruction');
        $trade->service_statuses = $trade->get_specific_service_statuses('finance');

        return view('order.trade-details.show-finance', ['trade' => $trade]);
    }

    public function showSafeSettlement(Trade $trade)
    {
        $trade->load('safe_settlements.instruction');
        $trade->service_statuses = $trade->get_specific_service_statuses('safe-settlement');

        return view('order.trade-details.show-safe-settlement', ['trade' => $trade]);
    }

    public function showTransport(Trade $trade)
    {
        $trade->load('trade_transports.instruction');
        $trade->service_statuses = $trade->get_specific_service_statuses('transport');

        return view('order.trade-details.show-transport', ['trade' => $trade]);
    }
}

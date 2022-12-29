<?php

namespace App\Http\Controllers\Order;

use App\Helpers\NameConversionHelper;
use App\Http\Controllers\Controller;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyingController extends Controller
{
    public function index(Request $request, NameConversionHelper $nameConversionHelper)
    {

        $data = [];
        $data['nameConversionHelper'] = $nameConversionHelper;
        $data['searched'] = $request->search ?? '';

        $trades = Trade::where('buyer_id', auth()->user()->id)->with(['trade_vehicle', 'seller']);

        if ($request->search) {


            switch ($request->search) {
                case 'last_updated':
                    $trades->orderBy('updated_at','desc');
                    break;

                case 'date_new_to_old':
                    $trades->orderBy('created_at','asc');
                    break;

                case 'date_old_to_new':
                    $trades->orderBy('created_at','desc');
                    break;

                case 'make_a_to_z':
                    $trades = Trade::where('buyer_id', 2)->with(['seller', 'trade_vehicle' => function ($query) {
                        $query->orderBy('make','asc');
                    }]);
                    break;

                case 'make_z_to_a':
                    $trades = Trade::where('buyer_id', 2)->with(['seller', 'trade_vehicle' => function ($query) {
                        $query->orderBy('make','desc');
                    }]);
                    break;

                case 'price_high_to_low':
                    $trades = Trade::where('buyer_id', 2)->with(['seller', 'trade_vehicle' => function ($query) {
                        $query->orderBy('price','desc');
                    }]);
                    break;

                case 'price_low_to_high':
                    $trades = Trade::where('buyer_id', 2)->with(['seller', 'trade_vehicle' => function ($query) {
                        $query->orderBy('price','asc');
                    }]);
                    break;

                case 'year_high_to_low':
                    $trades = Trade::where('buyer_id', 2)->with(['seller', 'trade_vehicle' => function ($query) {
                        $query->orderBy('year','desc');
                    }]);
                    break;

                case 'year_low_to_high':
                    $trades = Trade::where('buyer_id', 2)->with(['seller', 'trade_vehicle' => function ($query) {
                        $query->orderBy('year','asc');
                    }]);
                    break;

                default:

                    break;
            }
        }

        $data['trades'] = $trades->paginate(10);


        // echo "<pre>";print_r($data);exit();

        return view('order.buying.index', $data);
    }

}

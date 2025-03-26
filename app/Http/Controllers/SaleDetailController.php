<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaleDetail;
use Carbon\Carbon;

class SaleDetailController extends Controller
{
    public static function index($start, $end)
    {
        $saleDetails = SaleDetail::all()->sortBy('created_at');

        $groupedSales = [];
        $labels = [];
        $prices = [];


        if ($start && $end) {
            $startDate = Carbon::createFromFormat('m/d/Y', $start)->startOfDay();
            $endDate = Carbon::createFromFormat('m/d/Y', $end)->endOfDay();

            $saleDetailsForChart = SaleDetail::whereBetween('created_at', [$startDate, $endDate])
                ->orderBy('created_at')
                ->get();

            $groupedSales = $saleDetailsForChart->groupBy(function ($sale) {
                return $sale->created_at;
            });

            $labels = $groupedSales->keys()->toArray();
            $prices = array_values($groupedSales->map(function ($sales) {
                return $sales->sum('price');
            })->toArray());
        } else {
            $groupedSales = $saleDetails->groupBy(function ($sale) {
                return $sale->created_at;
            });
            $labels = $groupedSales->keys()->toArray();
            $prices = array_values($groupedSales->map(function ($sales) {
                return $sales->sum('price');
            })->toArray());
        }

        $totalPrice = $saleDetails->sum(function ($sale) {
            return $sale->price * $sale->quantity;
        });

        return view('app', [
            'saleDetails' => $saleDetails,
            'labels' => $labels,
            'prices' => $prices,
            'totalPrice' => $totalPrice,
            'startDate' => $start,
            'endDate' => $end
        ]);
    }

}

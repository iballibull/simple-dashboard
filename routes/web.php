<?php

use App\Models\SaleDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleDetailController;

Route::get('/', function () {
    $start = request('start');
    $end = request('end');
    $result = SaleDetailController::index($start, $end);

    return view('app', $result->getData());
});


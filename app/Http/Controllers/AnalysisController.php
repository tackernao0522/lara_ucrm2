<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AnalysisController extends Controller
{
    public function index()
    {
        // 期間指定
        $startDate = '2021-09-01';
        $endDate = '2022-8-31';

        return Inertia::render('Analysis');
    }
}

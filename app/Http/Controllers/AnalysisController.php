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

        // RFM分析
        // 1. 購買ID毎にまとめる
        $subQuery = Order::betweenDate($startDate, $endDate)
            ->groupBy('id')
            ->selectRaw('id, customer_id,
        customer_name, SUM(subtotal) as totalPerPurchase, created_at
        ');

        // datediffで日付の差分、maxで日付の最新日
        // 2. 会員毎にまとめて最終購入日、回数、合計金額を取得
        $subQuery = DB::table($subQuery)
            ->groupBy('customer_id')
            ->selectRaw('customer_id, customer_name,
        max(created_at) as recentDate,
        datediff(now(), max(created_at)) as recency,
        count(customer_id) as frequency,
        sum(totalPerPurchase) as monetary
        ')->get();

        dd($subQuery);

        return Inertia::render('Analysis');
    }
}

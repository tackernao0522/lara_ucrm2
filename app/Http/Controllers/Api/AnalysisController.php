<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnalysisController extends Controller
{
    public function index(Request $request)
    {
        // Ajax通信なのでJson形式で返却する必要がある
        return response()->json([
            'data' => $request->startDate // 仮設定
        ], Response::HTTP_OK);
    }
}

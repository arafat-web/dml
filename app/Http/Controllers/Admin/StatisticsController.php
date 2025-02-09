<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{


    public function index(Request $request)
    {
        $todayVisitors = Visitor::whereDate('created_at', Carbon::today())->count();
        $thisMonthVisitors = Visitor::whereMonth('created_at', Carbon::now()->month)->count();
        $thisYearVisitors = Visitor::whereYear('created_at', Carbon::now()->year)->count();
        $totalVisitors = Visitor::count();
        $allVisitors = Visitor::orderBy('created_at', 'desc')->simplePaginate(15);
        return view('admin.statistics.index', compact('todayVisitors', 'thisMonthVisitors', 'thisYearVisitors', 'totalVisitors', 'allVisitors'));
    }
}

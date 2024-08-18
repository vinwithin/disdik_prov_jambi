<?php

namespace App\Http\Controllers;

use App\Models\Visitors;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard',[
            'harian' => Visitors::getWeeklyVisitors(),
            'weeklyVisitors' => Visitors::countWeekly(),
            'monthlyVisitors' => Visitors::countMonthly(),
            'januari' => Visitors::countForMonth(1),
            'februari' => Visitors::countForMonth(2),
            'maret' => Visitors::countForMonth(3),
            'april' => Visitors::countForMonth(4),
            'mei' => Visitors::countForMonth(5),
            'juni' => Visitors::countForMonth(6),
            'juli' => Visitors::countForMonth(7),
            'agustus' => Visitors::countForMonth(8),
            'september' => Visitors::countForMonth(9),
            'oktober' => Visitors::countForMonth(10),
            'november' => Visitors::countForMonth(11),
            'desember' => Visitors::countForMonth(12),
        ]);
    }
}

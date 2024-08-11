<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Visitors extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    public $visitors = 'visitors';
    protected $fillable = [
        "ip_address",
        "user_agent",
    ];

    public static function onlineCount()
    {
        return self::where('visited_at', '>=', now()->subMinutes(5))->count();
    }
    public static function dayVisitor()
    {
        return self::whereDate('created_at', Carbon::now())->count();
    }

    public static function countWeekly()
    {
        return self::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
    }

    public static function countMonthly()
    {
        return self::whereYear('created_at', date('Y'))
                    ->whereMonth('created_at', date('m'))
                    ->count();
    }
    public static function countForMonth($month, $year = null)
    {
        $year = $year ?? date('Y'); // Default to current year if not provided

        return self::whereYear('created_at', $year)
                   ->whereMonth('created_at', $month)
                   ->count();
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        return self::whereDate('visited_at', Carbon::now())->count();
    }

    public static function countWeekly()
    {
        return self::whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
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

        return self::whereYear('visited_at', $year)
            ->whereMonth('created_at', $month)
            ->count();
    }
    public static function getWeeklyVisitors()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $weeklyVisitors = self::select(DB::raw('DAYNAME(visited_at) as day'), DB::raw('COUNT(*) as total'))
                            ->whereBetween('visited_at', [$startOfWeek, $endOfWeek])
                            ->groupBy('day')
                            ->orderBy(DB::raw('FIELD(day, "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday")'))
                            ->pluck('total', 'day')
                            ->toArray();

        // Mengisi hari yang tidak ada di data dengan nilai 0
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        return array_merge(array_fill_keys($days, 0), $weeklyVisitors);
    }
}

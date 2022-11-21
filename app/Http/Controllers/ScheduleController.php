<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //一覧表示
    public function index(Request $request)
    {
        $schedules = Schedule::all();

        return response()->json($schedules);
    }
}

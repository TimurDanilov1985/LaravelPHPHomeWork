<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    //
    public function showLogs() {
        $logs = DB::connection('mysql')->table('logs')->select(['id', 'time', 'duration', 'ip', 'url', 'method', 'input'])->get();
        return view('logs', ['logs' => $logs]);
    }
}

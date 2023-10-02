<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    /**
     * トップページ
     */
    public function index(Request $request)
    {
        Carbon::setTestNow('2022-01-31 00:00:00');
        // generationが1のuser郡を取得
        $users = User::where('generation', 1)->get();
        // 翌月の月末を想定
        $now = Carbon::now()->addMonthsNoOverflow();
        return view('home', compact('users', 'now'));
    }

    public function post()
    {
        $users = User::all();
        return view('home', compact('users'));
    }
}

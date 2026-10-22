<?php
namespace App\Http\Controllers;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $totalUsers = User::count();
        $recentUsers = User::latest()->take(5)->get();
        
        $stats = [
            'account_age_days' => $user->created_at->diffInDays(now()),
            'total_users' => $totalUsers,
            'recent_logins' => User::whereNotNull('last_login_at')->count(),
        ];
        
        return view('dashboard', compact('stats', 'recentUsers'));
    }
}

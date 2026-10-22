<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Dashboard') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-600 text-sm mb-2">Account Age</div>
                    <div class="text-3xl font-bold text-indigo-600">{{ $stats['account_age_days'] }}</div>
                    <div class="text-gray-500 text-xs">days</div>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-600 text-sm mb-2">Total Users</div>
                    <div class="text-3xl font-bold text-green-600">{{ $stats['total_users'] }}</div>
                    <div class="text-gray-500 text-xs">registered</div>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-600 text-sm mb-2">Active Sessions</div>
                    <div class="text-3xl font-bold text-blue-600">{{ $stats['recent_logins'] }}</div>
                    <div class="text-gray-500 text-xs">logged in</div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Welcome, {{ auth()->user()->name }}!</h3>
                <p class="text-gray-600 mb-4">You're logged in! This is a demonstration of Laravel Breeze authentication system with enhanced profile features.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <h4 class="font-semibold mb-2">Your Account</h4>
                        <p class="text-sm text-gray-600"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                        <p class="text-sm text-gray-600"><strong>Member since:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</p>
                        @if(auth()->user()->last_login_at)
                            <p class="text-sm text-gray-600"><strong>Last login:</strong> {{ auth()->user()->last_login_at->diffForHumans() }}</p>
                        @endif
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-2">Recent Users</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            @foreach($recentUsers as $user)
                                <li>{{ $user->name }} - {{ $user->created_at->diffForHumans() }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="mt-6 pt-6 border-t">
                    <h4 class="font-semibold mb-3">Features Demonstrated</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <p class="font-medium">User Registration</p>
                                <p class="text-sm text-gray-600">Email validation, password confirmation</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <p class="font-medium">Secure Login</p>
                                <p class="text-sm text-gray-600">Session management, rate limiting</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <p class="font-medium">Password Reset</p>
                                <p class="text-sm text-gray-600">Email-based recovery flow</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <p class="font-medium">Profile Management</p>
                                <p class="text-sm text-gray-600">Update info, change password, delete account</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <p class="font-medium">Email Verification</p>
                                <p class="text-sm text-gray-600">Optional email confirmation</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <p class="font-medium">Protected Routes</p>
                                <p class="text-sm text-gray-600">Auth middleware, authorization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

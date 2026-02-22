<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    <div class="login-container">
        <div class="login-card">
            <!-- Header -->
            <div class="login-header">
                <div class="login-logo">
                    <i class="fas fa-utensils"></i>
                </div>
                <h1 class="login-title">Welcome to Mighty</h1>
                <p class="login-subtitle">Sign in to access your restaurant management dashboard</p>
            </div>

            <!-- Design Form (Non-functional) -->
            <div class="space-y-6">
                <!-- Email Address -->
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-envelope mr-2 text-gray-400"></i>
                        Email Address
                    </label>
                    <div class="form-input bg-gray-50 text-gray-500">
                        Enter your email address
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <div class="flex items-center justify-between mb-2">
                        <label class="form-label mb-0">
                            <i class="fas fa-lock mr-2 text-gray-400"></i>
                            Password
                        </label>
                        <span class="text-sm text-primary-600">
                            Forgot password?
                        </span>
                    </div>
                    <div class="relative">
                        <div class="form-input bg-gray-50 text-gray-500 pr-10">
                            Enter your password
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <div class="h-4 w-4 border-2 border-gray-300 rounded bg-gray-50"></div>
                    <label class="ml-2 block text-sm text-gray-700">
                        Remember me for 30 days
                    </label>
                </div>

                <!-- Submit Button (Design only) -->
                <div>
                    <div class="btn-primary cursor-default">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Sign in to Dashboard
                    </div>
                </div>
            </div>

            <!-- Register Link (Design only) -->
            <div class="mt-8 text-center">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">New to Mighty?</span>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="w-full flex justify-center py-3 px-4 border border-primary-300 rounded-lg text-primary-600 bg-primary-50 cursor-default font-medium">
                        <i class="fas fa-user-plus mr-2"></i>
                        Create new account
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center">
                <p class="text-xs text-gray-500">
                    © {{ date('Y') }} Mighty Restaurant Management. All rights reserved.
                </p>
            </div>
        </div>
    </div>

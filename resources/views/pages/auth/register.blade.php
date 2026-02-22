<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    <div class="login-container">
        <div class="login-card max-w-lg">
            <!-- Header -->
            <div class="login-header">
                <div class="login-logo">
                    <i class="fas fa-utensils"></i>
                </div>
                <h1 class="login-title">Join Mighty</h1>
                <p class="login-subtitle">Create your restaurant management account and start your journey</p>
            </div>

            <!-- Design Form (Non-functional) -->
            <div class="space-y-6">
                <!-- Name -->
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-user mr-2 text-gray-400"></i>
                        Full Name
                    </label>
                    <div class="form-input bg-gray-50 text-gray-500">
                        Enter your full name
                    </div>
                </div>

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
                    <label class="form-label">
                        <i class="fas fa-lock mr-2 text-gray-400"></i>
                        Password
                    </label>
                    <div class="relative">
                        <div class="form-input bg-gray-50 text-gray-500 pr-10">
                            Create a password
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-lock mr-2 text-gray-400"></i>
                        Confirm Password
                    </label>
                    <div class="relative">
                        <div class="form-input bg-gray-50 text-gray-500 pr-10">
                            Confirm your password
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <div class="h-4 w-4 border-2 border-gray-300 rounded mt-1 bg-gray-50"></div>
                    <div class="ml-2 text-sm text-gray-600">
                        <span class="cursor-default">
                            I agree to the
                            <span class="text-primary-600 underline">Terms of Service</span>
                            and
                            <span class="text-primary-600 underline">Privacy Policy</span>
                        </span>
                    </div>
                </div>

                <!-- Submit Button (Design only) -->
                <div>
                    <div class="btn-primary cursor-default">
                        <i class="fas fa-user-plus mr-2"></i>
                        Create Account
                    </div>
                </div>
            </div>

            <!-- Login Link (Design only) -->
            <div class="mt-8 text-center">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Already have an account?</span>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="w-full flex justify-center py-3 px-4 border border-primary-300 rounded-lg text-primary-600 bg-primary-50 cursor-default font-medium">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Sign in to existing account
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
</body>
</html>

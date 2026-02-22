<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        @include('partials.head')
    </head>
    <body class="h-full bg-gray-50">
        <!-- Restaurant Sidebar -->
        <div class="flex h-full">
            <div class="restaurant-sidebar w-64 fixed h-full z-30">
                <!-- Logo Header -->
                <div class="restaurant-header">
                    <div class="restaurant-logo">
                        <div class="restaurant-logo-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-800">Mighty</h1>
                            <p class="text-xs text-gray-500">Restaurant Management</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="px-3 py-1.5 bg-primary-500 text-white rounded-lg text-sm font-medium">
                            <i class="fas fa-shopping-cart mr-1"></i>
                            POS
                        </div>
                        <div class="px-3 py-1.5 bg-gradient-to-r from-orange-500 to-yellow-500 text-white rounded-lg text-sm font-medium">
                            <i class="fas fa-utensils mr-1"></i>
                            Kitchen
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="flex-1 overflow-y-auto py-4">
                    <nav class="space-y-1">
                        <!-- Dashboard -->
                        <div class="restaurant-sidebar-item active">
                            <i class="fas fa-tachometer-alt w-5"></i>
                            <span class="ml-3 font-medium">Dashboard</span>
                        </div>

                        <!-- POS -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-cash-register w-5"></i>
                            <span class="ml-3 font-medium">POS</span>
                        </div>

                        <!-- Order Management -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-clipboard-list w-5"></i>
                            <span class="ml-3 font-medium">Order Management</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Purchase Management -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-shopping-cart w-5"></i>
                            <span class="ml-3 font-medium">Purchase Management</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Food Management -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-hamburger w-5"></i>
                            <span class="ml-3 font-medium">Food Management</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Table Reservation -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-chair w-5"></i>
                            <span class="ml-3 font-medium">Table Reservation</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Kitchen Production -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-fire w-5"></i>
                            <span class="ml-3 font-medium">Kitchen Production</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Account Management -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-calculator w-5"></i>
                            <span class="ml-3 font-medium">Account Management</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Reports -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-chart-bar w-5"></i>
                            <span class="ml-3 font-medium">Reports</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Website Setup -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-globe w-5"></i>
                            <span class="ml-3 font-medium">Website Setup</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Message -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-envelope w-5"></i>
                            <span class="ml-3 font-medium">Message</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Human Resource -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-users w-5"></i>
                            <span class="ml-3 font-medium">Human Resource</span>
                            <i class="fas fa-chevron-right ml-auto text-xs"></i>
                        </div>

                        <!-- Customer -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-user-friends w-5"></i>
                            <span class="ml-3 font-medium">Customer</span>
                        </div>

                        <!-- User Manual -->
                        <div class="restaurant-sidebar-item">
                            <i class="fas fa-book w-5"></i>
                            <span class="ml-3 font-medium">User Manual</span>
                        </div>
                    </nav>
                </div>

                <!-- User Profile Footer -->
                <div class="border-t border-gray-200 p-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-gradient-to-r from-primary-500 to-primary-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                            O
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-800 truncate">Owner 1</p>
                            <p class="text-xs text-gray-500 truncate">Owner 1</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <div class="p-1.5 text-gray-400" title="Settings">
                                <i class="fas fa-cog text-sm"></i>
                            </div>
                            <div class="p-1.5 text-gray-400" title="Logout">
                                <i class="fas fa-sign-out-alt text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Upgrade Badge -->
                    <div class="mt-3 flex items-center justify-center">
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1.5 rounded-lg text-xs font-medium flex items-center gap-2">
                            <i class="fas fa-crown"></i>
                            <span>Upgrade</span>
                            <span class="bg-white/20 px-1.5 py-0.5 rounded text-xs">
                                Trial: 7 days
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 ml-64">
                {{ $slot }}
            </div>
        </div>

        @fluxScripts
    </body>
</html>

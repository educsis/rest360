<x-layouts::app :title="__('Dashboard')">
    <div class="p-6 bg-gray-50 min-h-full">
        <!-- Welcome Header -->
        <div class="welcome-header">
            <h1 class="welcome-title flex items-center gap-2">
                <span>👋</span>
                Welcome back, Owner 1
            </h1>
            <p class="welcome-subtitle">Here's what's happening with your platform today</p>
        </div>

        <!-- Order Summary Stats -->
        <div class="mb-8">
            <h2 class="section-title">Order Summary</h2>
            <p class="text-gray-600 text-sm mb-6">Track your orders and performance at a glance!</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Income Card -->
                <div class="stats-card stats-card-income">
                    <div class="flex items-center justify-between mb-4">
                        <div class="stats-card-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <i class="fas fa-chart-line text-red-500"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Income</h3>
                    <p class="text-2xl font-bold text-gray-800">$ 1,565.85</p>
                </div>

                <!-- Total Orders Card -->
                <div class="stats-card stats-card-orders">
                    <div class="flex items-center justify-between mb-4">
                        <div class="stats-card-icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <i class="fas fa-shopping-cart text-orange-500"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Order</h3>
                    <p class="text-2xl font-bold text-gray-800">149</p>
                </div>

                <!-- Orders in Progress Card -->
                <div class="stats-card stats-card-progress">
                    <div class="flex items-center justify-between mb-4">
                        <div class="stats-card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <i class="fas fa-user text-blue-500"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Order In Progress</h3>
                    <p class="text-2xl font-bold text-gray-800">6</p>
                </div>

                <!-- Completed Orders Card -->
                <div class="stats-card stats-card-completed">
                    <div class="flex items-center justify-between mb-4">
                        <div class="stats-card-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <i class="fas fa-box text-green-500"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Order Completed</h3>
                    <p class="text-2xl font-bold text-gray-800">1</p>
                </div>

                <!-- Cancelled Orders Card -->
                <div class="stats-card stats-card-cancelled">
                    <div class="flex items-center justify-between mb-4">
                        <div class="stats-card-icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <i class="fas fa-ban text-red-500"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Cancelled Order</h3>
                    <p class="text-2xl font-bold text-gray-800">6</p>
                </div>
            </div>
        </div>

        <!-- Sales Overview and Reports -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Sales Overview Chart -->
            <div class="lg:col-span-2">
                <div class="chart-container">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="section-title mb-0">Sales Overview</h3>
                            <p class="text-gray-600 text-sm">Compare income and expenses over time to spot trends and peaks</p>
                        </div>
                        <div class="px-4 py-2 border border-gray-300 rounded-lg text-sm bg-white text-gray-700">
                            Monthly
                        </div>
                    </div>

                    <!-- Chart Placeholder -->
                    <div class="h-64 bg-gradient-to-r from-primary-50 to-orange-50 rounded-lg flex items-center justify-center border border-primary-200">
                        <div class="text-center">
                            <i class="fas fa-chart-area text-4xl text-primary-400 mb-4"></i>
                            <p class="text-primary-600 font-medium">Sales Chart</p>
                            <p class="text-sm text-gray-600">Chart visualization will be displayed here</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Report -->
            <div class="chart-container">
                <h3 class="section-title">Sales Report</h3>

                <!-- Donut Chart Placeholder -->
                <div class="flex items-center justify-center mb-6">
                    <div class="relative">
                        <div class="w-32 h-32 rounded-full bg-gradient-to-r from-primary-500 via-orange-500 to-red-500 flex items-center justify-center">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-pie text-2xl text-primary-500"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 bg-primary-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">Online Sale</span>
                        </div>
                        <span class="text-sm font-semibold">556</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">Third Party Sale</span>
                        </div>
                        <span class="text-sm font-semibold">467</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">TakeAway Sale</span>
                        </div>
                        <span class="text-sm font-semibold">676</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">Dine In Sale</span>
                        </div>
                        <span class="text-sm font-semibold">687</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="table-container">
            <div class="table-header">
                <h3 class="section-title mb-0">Recent Order</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SL</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waiter</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">00001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-20260221-1-0006</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Chef</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Customer 10</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">21/02/2026 05:05 PM</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$ 5.49</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-badge status-ready">Ready</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="text-primary-600 cursor-default">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">00002</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-20260221-1-0005</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SAAS Admin</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">N/A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">21/02/2026 03:57 PM</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$ 5.49</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-badge status-preparing">Preparing</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="text-primary-600 cursor-default">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">00003</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-20260221-1-0004</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SAAS Admin</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">N/A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">21/02/2026 03:56 PM</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$ 0.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-badge status-ready">Ready</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="text-primary-600 cursor-default">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts::app>

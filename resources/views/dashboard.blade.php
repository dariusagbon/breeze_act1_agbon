<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello Darius!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="mt-6 grid grid-cols-3 gap-4">

                <a href="{{ route('rooms') }}"
                    class="flex items-center justify-center gap-2 px-4 py-4 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                        🛏️ Rooms
                </a>

                <a href="{{ route('booking') }}"
                    class="flex items-center justify-center gap-2 px-4 py-4 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition">
                        📅 Booking
                </a>

                <a href="{{ route('BookingListView') }}"
                    class="flex items-center justify-center gap-2 px-4 py-4 bg-yellow-500 text-white font-semibold rounded-lg shadow hover:bg-yellow-600 transition">
                        📋 View Bookings
                </a>

                <a href="{{ route('CustomerView') }}"
                    class="flex items-center justify-center gap-2 px-4 py-4 bg-purple-600 text-white font-semibold rounded-lg shadow hover:bg-purple-700 transition">
                        👥 Customers
                </a>

                <a href="{{ route('Payment') }}"
                    class="flex items-center justify-center gap-2 col-span-2 px-4 py-4 bg-red-600 text-white font-semibold rounded-lg shadow hover:bg-red-700 transition">
                        💳 Payments
                </a>

            </div>

        </div>
    </div>  
</x-app-layout>
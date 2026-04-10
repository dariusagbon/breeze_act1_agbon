<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-8">

                <h3 class="text-lg font-semibold text-gray-800 mb-6">List of Bookings</h3>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Empty State --}}
                @if($bookings->isEmpty())
                    <p class="text-gray-500">No bookings yet. <a href="{{ route('booking') }}" class="text-blue-600 hover:underline">Make one now.</a></p>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                <tr>
                                    <th class="px-4 py-3">#</th>
                                    <th class="px-4 py-3">Guest Name</th>
                                    <th class="px-4 py-3">Contact</th>
                                    <th class="px-4 py-3">Room Type</th>
                                    <th class="px-4 py-3">Check-in</th>
                                    <th class="px-4 py-3">Check-out</th>
                                    <th class="px-4 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                    <tr class="border-t border-gray-200 hover:bg-gray-50">
                                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-3">{{ $booking->GuessName }}</td>
                                        <td class="px-4 py-3">{{ $booking->contactNo }}</td>
                                        <td class="px-4 py-3">
                                            <span class="px-2 py-1 rounded-full text-xs font-medium
                                                @if($booking->RoomType === 'SUITE') bg-purple-100 text-purple-700
                                                @elseif($booking->RoomType === 'DELUXE') bg-blue-100 text-blue-700
                                                @else bg-gray-100 text-gray-700
                                                @endif">
                                                {{ $booking->RoomType }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3">{{ $booking->check_in }}</td>
                                        <td class="px-4 py-3">{{ $booking->check_out }}</td>
                                        <td class="px-4 py-3">
                                            <form method="POST" action="/ViewBooking/{{ $booking->id }}"
                                                  onsubmit="return confirm('Delete this booking?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="text-red-600 hover:underline text-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>

</x-app-layout>
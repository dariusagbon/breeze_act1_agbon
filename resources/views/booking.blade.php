<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Rooms') }}
</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-8">

                <h3 class="text-lg font-semibold text-gray-800 mb-6">Room Booking Form</h3>

                <form method="POST" action="/ViewBooking/store">
                    @csrf

                    {{-- Room Type --}}
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Room Type</label>
                        <select name="RoomType"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Room</option>
                            <option value="SUITE">Suite</option>
                            <option value="DELUXE">Deluxe</option>
                            <option value="STANDARD">Standard</option>  {{-- Fixed typo: STANARD → Standard --}}
                        </select>
                    </div>

                    {{-- Guest Name --}}
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Guest Name</label>
                        <input type="text" name="GuessName"
                               placeholder="Enter Full Name"
                               required                             
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    {{--Contacts--}}
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                        <input type="number" name="contactNo"
                               placeholder="Enter Contact Number"
                               required                             
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    {{-- Check-in Date --}}
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Check-in Date</label>
                        <input type="date" name="check_in"
                               required                              
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    {{-- Check-out Date --}}
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Check-out Date</label>
                        <input type="date" name="check_out"
                               required
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit"
                            class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                        Confirm Booking
                    </button>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>
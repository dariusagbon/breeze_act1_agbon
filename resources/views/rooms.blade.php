<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome Card --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("View Rooms!") }}
                </div>
            </div>

            {{-- Rooms Grid --}}
            <div class="mt-6 grid grid-cols-3 gap-6">

                {{-- Room Card 1 --}}
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('images/room1.jpg') }}" alt="Suite"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">Suite</h2>
                        <p class="text-sm text-gray-500 mt-1">Luxury suite with ocean view.</p>
                        <a href="{{ route('booking')}}"
                           class="mt-3 inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

                {{-- Room Card 2 --}}
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('images/room2.jpg') }}" alt="Deluxe"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">Deluxe</h2>
                        <p class="text-sm text-gray-500 mt-1">Spacious deluxe room with balcony.</p>
                        <a href="{{ route('booking')}}"
                           class="mt-3 inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

                {{-- Room Card 3 --}}
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('images/room3.jpg') }}" alt="Standard"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">Standard</h2>
                        <p class="text-sm text-gray-500 mt-1">Cozy standard room for your stay.</p>
                        <a href="{{ route('booking')}}"
                           class="mt-3 inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome Card --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("View Payment Options!") }}
                </div>
            </div>

            {{-- Grid --}}
            <div class="mt-6 grid grid-cols-3 gap-6">

                
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('images/cash1.jpg') }}" alt="Suite"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">Cash</h2>
                        <p class="text-sm text-gray-500 mt-1">Pay through Cash.</p>
                        <a href="{{ route('dashboard')}}"
                           class="mt-3 inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700 transition">
                            Pay
                        </a>
                    </div>
                </div>

                {{-- Room Card 2 --}}
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('images/bank.jpg') }}" alt="Deluxe"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">Online Banking</h2>
                        <p class="text-sm text-gray-500 mt-1">Pay Online.</p>
                        <a href="{{ route('dashboard')}}"
                           class="mt-3 inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700 transition">
                            Pay 
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
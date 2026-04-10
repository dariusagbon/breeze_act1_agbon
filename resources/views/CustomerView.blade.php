<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-8">

                <h3 class="text-lg font-semibold text-gray-800 mb-6">Add Customer</h3>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Add Customer Form --}}
                <form method="POST" action="/Customers/store" class="mb-8">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                        <input type="text" name="CustomerName" required
                               value="{{ old('CustomerName') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @error('CustomerName')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="CustomerEmail" required
                               value="{{ old('CustomerEmail') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @error('CustomerEmail')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                            class="bg-purple-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-purple-700 transition">
                        Save Customer
                    </button>
                </form>

                <hr class="mb-6">

                <h3 class="text-lg font-semibold text-gray-800 mb-4">Customer List</h3>

                @if($customers->isEmpty())
                    <p class="text-gray-500">No customers yet.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                <tr>
                                    <th class="px-4 py-3">#</th>
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Email</th>
                                    <th class="px-4 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                    <tr class="border-t border-gray-200 hover:bg-gray-50">
                                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-3">{{ $customer->CustomerName }}</td>
                                        <td class="px-4 py-3">{{ $customer->CustomerEmail }}</td>
                                        <td class="px-4 py-3">
                                            <form method="POST" action="/Customers/{{ $customer->id }}"
                                                  onsubmit="return confirm('Delete this customer?')">
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
<x-app-layout>
    <x-slot name="header">
        <div class="text-center space-y-2">
            <h2 class="text-3xl font-extrabold text-orange-600 tracking-tight">
                {{ __('Make a Reservation') }}
            </h2>
            <p class="text-gray-500">Reserve your spot at <span class="font-semibold text-orange-500">Zeupreme Deli</span> today.</p>
        </div>
    </x-slot>

    <div class="py-10" style="background:#FFE9D4; min-height:100vh;">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-200">

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="mb-6 p-4 text-green-800 bg-green-50 rounded-lg border border-green-200 text-sm">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                {{-- Error Messages --}}
                @if($errors->any())
                    <div class="mb-6 p-4 text-red-800 bg-red-50 rounded-lg border border-red-200 text-sm">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Reservation Form --}}
                <form method="POST" action="{{ route('reservations.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" name="date" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Time</label>
                        <input type="time" name="time" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Guests</label>
                        <input type="number" name="guests" min="1" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 bg-gray-100 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Contact</label>
                        <input type="text" name="contact" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition">
                            Book Table
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

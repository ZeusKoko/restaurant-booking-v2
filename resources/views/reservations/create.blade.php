<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make a Reservation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if(session('success'))
                    <div style="color: green">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div style="color: red">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('reservations.store') }}">
                    @csrf
                    <div>
                        <label>Date:</label>
                        <input type="date" name="date" required>
                    </div>
                    <div>
                        <label>Time:</label>
                        <input type="time" name="time" required>
                    </div>
                    <div>
                        <label>Guests:</label>
                        <input type="number" name="guests" min="1" required>
                    </div>
                    <div>
                        <label>Name:</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" required>
                    </div>
                    <div>
                        <label>Contact:</label>
                        <input type="text" name="contact" required>
                    </div>
                    <button type="submit">Book Table</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

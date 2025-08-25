<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-orange-600 tracking-wide">
            🍴 {{ __('Zeupreme Deli - Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 rounded-2x1 p-6">
                @if ($reservations->count() > 0)
                    <table class="w-full border-collapse rounded-lg overflow-hidden shadow-lg">
                        <thead>
                            <tr class="bg-gradient-to-r from-orange-500 to-red-500 text-white text-left text-sm uppercase">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Time</th>
                                <th class="px-4 py-3">Guests</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-gray-700">
                            @foreach ($reservations as $reservation)
                                <tr class="hover:bg-orange-50 transition">
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->user_id }}</td>
                                    <td>{{ $reservation->date }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>{{ $reservation->guests }}</td>
                                    <td>{{ $reservation->status }}</td>
                                    <td>
                                        <form action="{{ route('admin.reservations.update', $reservation->id) }}" method="POST">
                                            @csrf
                                            <select name="status">
                                                <option value="pending" {{ $reservation->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="approved" {{ $reservation->status == 'approved' ? 'selected' : '' }}>Approve</option>
                                                <option value="declined" {{ $reservation->status == 'declined' ? 'selected' : '' }}>Decline</option>
                                            </select>
                                            <button type="submit">Update</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    No reservations yet.
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

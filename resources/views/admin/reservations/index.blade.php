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
                                   <td class="px-4 py-3 font-semibold text-gray-900">{{ $reservation->id }}</td>
                                                                        <td class="px-4 py-3">{{ $reservation->user_id }}</td>
                                    <td class="px-4 py-3">{{ $reservation->date }}</td>
                                    <td class="px-4 py-3">{{ $reservation->time }}</td>
                                    <td class="px-4 py-3">{{ $reservation->guests }}</td>
                                    <td class="px-4 py-3">{{ $reservation->status }}</td>
                                    <td>
                                        <form action="{{ route('admin.reservations.update', $reservation->id) }}" method="POST">
                                            @csrf
                                            <select name="status" class="rounded-1g border-gray-300 text-sm focus:ring-orange-500 focus:border-orange-500">
                                                <option value="pending" {{ $reservation->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="approved" {{ $reservation->status == 'approved' ? 'selected' : '' }}>Approve</option>
                                                <option value="declined" {{ $reservation->status == 'declined' ? 'selected' : '' }}>Decline</option>
                                            </select>
                                            <button type="submit"class="px-3 py-1 bg-orange-600 hover:bg-orange-700 text-white rounded-1g text-sm transition">Update</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-center py-12 text-gray-500">
                        🍽️ No reservations yet.
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

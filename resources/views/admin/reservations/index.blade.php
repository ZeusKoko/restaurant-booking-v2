<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin - All Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($reservations->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Guests</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
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

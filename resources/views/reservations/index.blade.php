<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl" style="color:#FF7F00;">
            My Reservations
        </h2>
    </x-slot>

    <div class="py-10" style="background:#FFE9D4; min-height:100vh;">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-lg rounded-2xl p-6" style="background:#ffffff;">

                @if(session('success'))
                    <div class="mb-4 p-3 rounded-lg font-medium" style="background:#FFC300; color:#000;">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full border-collapse text-sm md:text-base">
                    <thead style="background:#1F1F1F; color:#FFE9D4;">
                        <tr>
                            <th class="py-3 px-4 text-left">Date</th>
                            <th class="py-3 px-4 text-left">Time</th>
                            <th class="py-3 px-4 text-left">Guests</th>
                            <th class="py-3 px-4 text-left">Name</th>
                            <th class="py-3 px-4 text-left">Contact</th>
                            <th class="py-3 px-4 text-left">Status</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                            <tr class="border-b border-[#6B7280]/30 hover:bg-[#FFC300]/15 transition">
                                <td class="py-3 px-4 text-[#1F1F1F]">{{ $reservation->date }}</td>
                                <td class="py-3 px-4 text-[#1F1F1F]">{{ $reservation->time }}</td>
                                <td class="py-3 px-4 text-[#1F1F1F]">{{ $reservation->guests }}</td>
                                <td class="py-3 px-4 text-[#1F1F1F]">{{ $reservation->name }}</td>
                                <td class="py-3 px-4 text-[#1F1F1F]">{{ $reservation->contact }}</td>
                                <td class="py-3 px-4">
                                    @if($reservation->status == 'confirmed')
                                        <span class="px-3 py-1 rounded-full text-white bg-green-500 text-sm">Confirmed</span>
                                    @elseif($reservation->status == 'pending')
                                        <span class="px-3 py-1 rounded-full text-white bg-yellow-500 text-sm">Pending</span>
                                    @elseif($reservation->status == 'declined')
                                        <span class="px-3 py-1 rounded-full text-white bg-red-500 text-sm">Declined</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4">
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Cancel this reservation?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            class="px-4 py-2 rounded-lg text-white font-medium hover:opacity-90 transition"
                                            style="background:#FF7F00;">
                                            Cancel
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>

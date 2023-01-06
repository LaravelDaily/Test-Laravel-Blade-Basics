<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>Row Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            {{-- Task: only every second row should have "bg-red-100" --}}
                            <tr @if ($loop->even)
                                class="bg-red-100"
                                @endif
                                >
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                {{-- Task: only the FIRST row should have email with "font-bold" --}}
                                <td @if ($loop->first)
                                    class="font-bold"
                                    @endif
                                    >{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No content.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

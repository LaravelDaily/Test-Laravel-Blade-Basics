<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                            @foreach ($users as $user)
                            {{-- Task: only every second row should have "bg-red-100" --}}
                            @if ($loop->even)
                            <tr class="bg-red-100">
                                @else
                            <tr>
                                @endif
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                {{-- Task: only the FIRST row should have email with "font-bold" --}}
                                @if ($loop->first)
                                <td class="font-bold">{{ $user->email }}</td>
                                @else
                                <td>{{ $user->email }}</td>
                                @endif
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

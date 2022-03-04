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
                            @php
                              $i = 1;
                            @endphp
                            @foreach ($users as $user)
                                {{-- Task: only every second row should have "bg-red-100" --}}
                                @if($i%2==0)
                                <tr >
                                    <td>{{$i}}</td>
                                    @if($i==1)
                                    <td class="font-bold">{{ $user->email }}</td>
                                    @else
                                    <td>{{ $user->email }}</td>
                                    @endif
                                    <td>{{ $user->created_at }}</td>
                                </tr
                                @else
                                <tr class="bg-red-100">
                                    <td>{{$i}}</td>
                                    <td>{{ $user->name }}</td>
                                    @if($i==1)
                                    <td class="font-bold">{{ $user->email }}</td>
                                    @else
                                    <td>{{ $user->email }}</td>
                                    @endif
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

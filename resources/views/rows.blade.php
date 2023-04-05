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
                        @if(count($users))
                            {{--@foreach ($users as $user)--}}
                            @foreach($users as $key=>$value)
                                {{-- Task: only every second row should have "bg-red-100" + --}}
                                @if(($key+1)%2==0)
                                    <tr class="bg-red-100">
                                @else
                                    <tr>
                                        @endif
                                        <td>{{-- Task: add row number here: 1, 2, etc. + --}}{{$key+1}}</td>
                                        <td>{{ $value->name }}</td>
                                        {{-- Task: only the FIRST row should have email with "font-bold"´+ --}}
                                        @if($key==0)
                                            <td class="font-bold">{{ $value->email }}</td>
                                        @else
                                            <td>{{ $value->email }}</td>
                                        @endif
                                        <td>{{ $value->created_at }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <td colspan="3">No content.</td>
                                        </tr>
                                    @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Authenticated?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Task: add a condition to show correct text --}}
                    {{-- If user is logged in, show their email --}}
                    @auth
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Yes, I am logged in as {{ auth()->user()->email }}
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                    {{ __('You are logged in!') }}
                                </p>
                            </div>
                        </div>

                    @endauth

                    @guest
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    No, I am not logged in.
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                    {{ __('You are not logged in!') }}
                                </p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

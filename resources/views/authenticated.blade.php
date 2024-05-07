<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Authenticated?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    {{-- Task: add a condition to show correct text --}}
                    {{-- If user is logged in, show their email --}}
{{--                    @if (auth()->check())--}}
{{--                        Yes, I am logged in as {{ auth()->user()->email }}.--}}
{{--                    @else--}}
{{--                        No, I am not logged in.--}}
{{--                    @endif--}}
                    @auth
                        Yes, I am logged in as {{ Auth::user()->email }}.
                    @else
                        No, I am not logged in.
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

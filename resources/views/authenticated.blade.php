<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Authenticated?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Task: add a condition to show correct text --}}
                    {{-- If user is logged in, show their email --}}
                    @if(Auth::check())
                    Yes, I am logged in as {{ Auth::user()->email }}.
                    @else
                    No, I am not logged in.
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

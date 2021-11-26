@extends('layouts.main')
@section('header')
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Main Layout') }}
    </h2>
@endsection
@section('content')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Task: change the layout from layouts/app.blade.php --}}
                    {{-- to layouts/main.blade.php --}}
                    Please change layout.
                </div>
            </div>
        </div>
    </div>
@endsection

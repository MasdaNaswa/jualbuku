@extends('layout.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
            role="alert">
            <strong class="font-bold">Sukses!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
    <div>
    @include('components.carousel')
    </div>

    <div class="">
        @include('components.section')
    </div>

    <div class="px-5 py-30">
        @include('components.card_dashboard1')
    </div>

    <div class="px-5">
        @include('components.card_dashboard3')
    </div>

    <div class="px-5">
        @include('components.card_dashboard4')
    </div>

    <div class="px-5">
        @include('components.new_arrival')
    </div>

    <div>
    @include('components.FAQ')
    </div>

    <div>
        @include('components.blog')
    </div>
</div>
@endsection
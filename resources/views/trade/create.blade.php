@extends('layouts.front_app')

@section('single_page_style')
    @livewireStyles
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
@endsection

@section('single_page_script')

    @livewireScripts

    <script defer  src="{{ asset('assets/js/alpine.js') }}"></script>
    <!-- Buyer Channel JS -->
    <script src="{{ asset('assets/js/buyer.js') }}"></script>

    <!-- Buyer Channel JS -->
    <script src="{{ asset('assets/js/seller.js') }}"></script>

    <!-- Inspection JS -->
    {{-- <script src="{{ asset('assets/js/inspection_buyer.js') }}"></script> --}}

@endsection

@section('content')

    <livewire:trade.input-index :user_type="$user_type" />

@endsection

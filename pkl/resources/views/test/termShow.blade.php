@extends('layouts.all_main')

@section('bread_title', 'TF_Dashboard')

@section('navbar')
    @include('partials.guest_navbar')
@endsection

@section('sidebar')
    @include('partials.sidebar_collapse')
@endsection

@section('login')
    @include('partials.sidebar_login')
@endsection

@section('title', 'Dashboard')
{{-- {{ dd(get_defined_vars()) }} --}}
@section('konten')
    <div class="content">
        <div class="container fluid">
            <div class="row">
                <div class="card-body p-0">
                    <div class="col-12" id="accordion">
                        @livewire('showterm')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

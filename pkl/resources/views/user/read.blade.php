{{-- @dd($read) --}}

@extends('layouts.all_main')

@section('bread_title', 'Dashboard')
@section('title', 'User | Home')

@section('navbar')
    @include('user.user_navbar')
@endsection

@section('sidebar')
    @include('partials.sidebar_collapse')
@endsection

@section('konten')
<div class="content">
    <div class="container fluid">
        <div class="row">
            <div class="col-12" id="accordion">
                @livewire('search')
            </div>
        </div>
    </div>
</div>
@livewireScripts
@endsection
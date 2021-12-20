@extends('Admin.templates.layouts.admin_main')
@section('bread_title','Dashboard')
@section('title','Admin | Dashboard')
@section('navbar')
    @include('Admin.templates.partials.admin_navbar')
@endsection
@section('sidebar')
    @include('Admin.templates.partials.admin_sidebar')
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
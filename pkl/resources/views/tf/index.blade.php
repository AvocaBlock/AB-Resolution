@extends('layouts.all_main')

@section('bread_title', 'TF')
@section('title', 'TF')

@section('navbar')
    @include('partials.guest_navbar')
@endsection

@section('sidebar')
    @include('partials.sidebar_collapse')
@endsection

@section('login')
    @include('partials.sidebar_login')
@endsection

{{-- {{ dd(get_defined_vars()) }} --}}
@section('konten')
    
    <div class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12 py-2">
                        <form action="tf/indexing" method="POST">
                            @csrf 
                            <button class="btn btn-primary btn-sm mx-1 float-sm-right" type="submit">Indexing</button>
                        </form>
                        <form action="tf/term-show" method="POST">
                            @csrf 
                            <button class="btn btn-primary btn-sm mx-1 float-sm-right" type="submit">Show Terms</button>
                        </form>
                        <form action="tf/idf" method="POST">
                            @csrf 
                            <button class="btn btn-primary btn-sm mx-1 float-sm-right" type="submit">IDF</button>
                        </form>
                    
                </div>
                {{-- <div class="col-6">
                    <form action="tf/term-show" method="POST">
                        @csrf 
                        <button class="btn btn-primary btn-sm" type="submit">Show Terms</button>
                    </form>
                </div> --}}
            </div>
            
            
            <div class="row">
                <div class="card-body p-0">
                    <div class="col-12" id="accordion">
                        @livewire('tf')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

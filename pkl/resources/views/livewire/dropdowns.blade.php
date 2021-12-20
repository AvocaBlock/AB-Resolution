@extends('layouts.all_main')

@section('bread_title', 'Dashboard')

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
                        @if (isset($category))
                            <div>
                                {{-- {{ $category }} --}}
                                <div class="form-group row">
                                    <label for="state" class="col-md-4 col-form-label text-md-right">Kategori</label>
                                    <div class="col-md-6">
                                        <select class="form-control" wire:model="selectedState">
                                            <option value="" selected>Pilih Kategori</option>
                                            @foreach ($category as $state)
                                                <option value="{{ $state->id }}">{{ $state->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                @if (!is_null($selectedState))
                                    @foreach ($cities as $faq)
                                        {{-- {{ dd($cities) }} --}}
                                        <div class="card card-primary card-outline">
                                            <a class="d-block w-100" data-toggle="collapse"
                                                href="#{{ 'ss-' . $faq->id }}">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        {{ $faq->question }}
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="{{ 'ss-' . $faq->id }}" class="collapse"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    {{ $faq->answer }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- {{ $cities->links() }} --}}
                                @endif
                            </div>
                        @else
                            @livewire('dropdowns')
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

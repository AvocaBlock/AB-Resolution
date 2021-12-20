@extends('Admin.templates.layouts.admin_main')
@section('bread_title','System Create')
@section('title','Admin | System')
@section('navbar')
    @include('Admin.templates.partials.admin_navbar')
@endsection
@section('sidebar')
    @include('Admin.templates.partials.admin_sidebar')
@endsection

@section('konten')
    <div class="content">
        <div class="container fluid">
            <form action="/Admin/System/{{ $system['id'] }}" method="post">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        
                        <div class="form-group">
                            <label for="inputName">Judul: </label>
                            <input type="text" id="title" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{ $system['title'] }}"/>
                            @error('title')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputName">Deskripsi: </label>
                            <textarea id="desc" name="desc" class="form-control" rows="4">{{ $system['desc'] }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-primary float-sm-right" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
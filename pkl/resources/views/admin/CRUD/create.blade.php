@extends('Admin.templates.layouts.admin_main')
@section('bread_title', 'Create')
@section('title', 'Admin | Create')
@section('navbar')
    @include('Admin.templates.partials.admin_navbar')
@endsection
@section('sidebar')
    @include('Admin.templates.partials.admin_sidebar')
@endsection

@section('konten')
    <div class="content">
        <div class="container fluid">
            {{-- INSERT --}}
            <form action="/Admin/faq" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                        <!-- select -->
                        <div class="form-group">
                            <label>Topik</label>
                            <select class="form-control" name="s_id">
                                @foreach ($category as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- QUESTION --}}
                        <div class="form-group">
                            <label for="inputName">Pertanyaan: </label>
                            <input type="text" id="question" name="question" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="inputMessage">Jawaban</label>
                            <textarea id="answer" name="answer" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="float-sm-right btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('Admin.templates.layouts.admin_main')
@section('bread_title','Update')
@section('title','Admin | Update')
@section('navbar')
    @include('Admin.templates.partials.admin_navbar')
@endsection
@section('sidebar')
    @include('Admin.templates.partials.admin_sidebar')
@endsection

@section('konten')
    <div class="content">
        <div class ="container fluid">
            <form action="/Admin/faq/{{ $faq['id'] }}" method="post">
                @method('put')
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="id" value="{{ $faq['id'] }}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group mb-3 ">
                            <a href="/Admin/faq" class="btn btn-primary btn-sm float-sm-right">Kembali</a>
                        </div>
                        <!-- select -->
                        <div class="form-group">
                            <label>Topik</label>
                            <select disabled value="{{ $faq['s_id']}}" class="form-control" name="s_id" >
                                @foreach ($category as $item)
                                    <option>{{ $item['title'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- QUESTION --}}
                        <div class="form-group">
                            <label for="inputName">Pertanyaan: </label>
                            <input type="text" id="question" name="question" class="form-control" value="{{ $faq['question'] }}" />
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Jawaban</label>
                            <textarea id="answer" name="answer" class="form-control" rows="4" >{{ $faq['answer'] }}</textarea>
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
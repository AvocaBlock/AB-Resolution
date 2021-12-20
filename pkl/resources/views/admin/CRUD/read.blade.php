@extends('Admin.templates.layouts.admin_main')
@section('bread_title','FAQ')
@section('title','Admin | FAQ')
@section('navbar')
    @include('Admin.templates.partials.admin_navbar')
@endsection
@section('sidebar')
    @include('Admin.templates.partials.admin_sidebar')
@endsection

@section('konten')
    <div class="content">
        <div class ="container fluid">
            <div class="card-body p-0">
                {{-- SEARCH FORM --}}
                <form action="javascript:search()" method="POST">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control" placeholder="Search System" id="search">
                                <div class="input-group-prepend">
                                    <a href="javascript:search()" class="input-group-text btn">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="float-sm-right mx-3">
                    <form action="/Admin/faq/create" method="get">
                        <button class="btn btn-sm btn-primary">
                            Tambah FAQ
                            <i class="fa fa-plus-circle"></i>
                        </button>
                    </form>
                </div>
                {{-- TABLE VIEW --}}
                <table class="table table-striped projects">
                    <thead>
                        <th class="text-center" style="width:10%">
                            Kategori
                        </th>
                        <th class="text-center" style="width:30%">
                            Pertanyaan
                        </th>
                        <th class="text-center" style="width:40%">
                            Jawaban
                        </th>
                        <th class="text-center" style="width:20%">
                            Aksi
                        </th>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($read as $faq)
                        <tr>
                            <td>{{ $faq->system->title}}
                            <td>{{ $faq['question'] }}</td>
                            <td class="text-justify">{{ $faq['answer'] }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/Admin/faq/{{ $faq['id'] }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Sunting
                                </a>
                                <form class="d-inline" action="/Admin/faq/{{ $faq['id'] }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#data-{{$faq['id']}}">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                    <div class="modal fade" id="data-{{$faq['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel"> HAPUS FAQ</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              Yakin ingin menghapus <br>
                                              Pertanyaan : "{{ $faq['question'] }}",<br>
                                              Jawaban : "{{ $faq['answer'] }}" ?
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">
                                                <i class="far fa-circle"></i> Batal
                                              </button>
                                              <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Hapus
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script>
        $('#search').on('keyup', function() {
            search();
        });
        search();

        function search() {
            var keyword = $('#search').val();
            $.post('{{ route('faq.search') }}', {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    keyword: keyword
                },
                function(data) {
                    console.log(data);
                    table_post_row(data);
                });
        }
        // table row with ajax
        function table_post_row(res) {
            let htmlView = '';
            if (res.systems.length <= 0) {
                htmlView += `
            <tr>
              <td colspan="4">No data.</td>
            </tr>`;
            }
            for (let i = 0; i < res.systems.length; i++) {
                htmlView += `
            <tr>
                <td class="text-center">${res.systems[i].system.title}</td>
                <td class="text-center">${res.systems[i].question}</td>
                <td class="text-justify">${res.systems[i].answer}</td>
                <td class="text-center">
                    <a class="btn btn-info btn-sm" href="/Admin/faq/${res.systems[i].id}/edit">
                        <i class="fas fa-pencil-alt"></i>
                        Sunting
                    </a>
                    <form class="d-inline " action="/Admin/faq/${res.systems[i].id}" method="POST">
                        @csrf 
                        @method('delete')
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#data-${res.systems[i].id}">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                        <div class="modal fade" id="data-${res.systems[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Hapus FAQ</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body text-center">
                                              Yakin ingin menghapus " ${res.systems[i].question} " ?<br>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">
                                                <i class="fas fa-times"></i> Batal
                                              </button>
                                              <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Hapus
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                    </form>
                </td>
                
            </tr>`;
            }
            $('tbody').html(htmlView);
        }
    </script>
@endsection

@extends('Admin.templates.layouts.admin_main')
@section('bread_title', 'Systems')
@section('title', 'Admin | Sistem')
@section('navbar')
    @include('Admin.templates.partials.admin_navbar')
@endsection
@section('sidebar')
    @include('Admin.templates.partials.admin_sidebar')
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}


@section('konten')
    <div class="content">
        <div class="container fluid">
            <div class=" p-0">
                <form action="javascript:search()" method="POST">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <div class="input-group mb-1 ">
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

                <div class="float-sm-right my-3 mb-4">
                    <form action="/Admin/System/create" method="get">
                        <button class="btn btn-sm btn-primary px-3">
                            Tambah Sistem
                            <i class="fa fa-plus-circle"></i>
                        </button>
                    </form>
                </div>

                <table class="text-justify table table-striped table-inverse table-responsive d-table">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:20%">Judul</th>
                            <th class="text-center" style="width:60%">Deskripsi</th>
                            <th class="text-center" style="width:20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
            $.post('{{ route('system.search') }}', {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    keyword: keyword
                },
                function(data) {
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
                <td class="text-center">${res.systems[i].title}</td>
                <td>${res.systems[i].desc}</td>
                <td class="text-center">
                    <a class="btn btn-info btn-sm mr-2" href="/Admin/System/${res.systems[i].id}/edit">
                        <i class="fas fa-pencil-alt"></i>
                        Sunting
                    </a>
                    <form class="d-inline" action="/Admin/System/${res.systems[i].id}" method="POST">
                        @csrf 
                        @method('delete')
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#data-${res.systems[i].id}">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                        <div class="modal fade" id="data-${res.systems[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Hapus Sistem</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              Yakin ingin menghapus ${res.systems[i].title}?<br>
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

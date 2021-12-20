@extends('handler.template')
@section('title', 'Indexing')

@section('content')
    <div class="content">
        <div class="content-wrapper py-5">
            <h1 class="my-0 fw-normal">
                404 ERROR
            </h1>
            {{ $error_msg }}
            <a href="javascript:history.back()">Go Back</a>
        </div>
    </div>
@endsection

@extends('layouts.all_main')
@section('bread_title','Login')
@section('title','Login')
 
 <!-- Control Sidebar -->
 @section('konten')
    <!-- Control sidebar content goes here -->
    
    <div class="content">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    @if(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
        <div class="container fluid">
            <form action="login" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="mt-5 form-group mx-4">
                    <div class="d-flex justify-content-center">
                        <label>LOGIN</label>
                    </div>
                    <div class="form-floating">
                        <label>Username: </label>
                        <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" >
                        @error('username')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                       <button type="submit" class="form-control mx-5">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 @endsection
 

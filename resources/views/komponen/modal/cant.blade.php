@extends('komponen.app-blank')
@section('konten')
    <button type="button" class="btn btn-secondary">
        <a href="javascript:history.back()" class="text-white" style="text-decoration: none">
            <i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
    </button>
    <div class="container text-center">
        <h1 class="header fw-bolder my-3">SORRY.............</h1>
        <img src="{{ asset('assets/img/error.png') }}" alt="In-progres" width="400px">
        <h3 class="body fw-bold my-3">Ega Can't Make This Feature Come True</h3>
    </div>
@endsection

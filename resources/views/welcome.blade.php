@extends('layouts.mainUser')

@section('navbar')
    <div id="carouselExampleRide" class="carousel slide mt-3" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/1.png" class="d-block w-100 insek" alt="PMB">
            </div>
            <div class="carousel-item">
                <img src="/img/2.png" class="d-block w-100 insek" alt="PMB">
            </div>
            <div class="carousel-item">
                <img src="/img/Untitled.jpg" class="d-block w-100 insek" alt="PMB">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
            <a href="/daftar" class="btn btn-primary float-left">Daftar</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-4">
            <div class="card">
                <img src="/img/Beasiswa.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa Uwika</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="/beasiswa" class="btn btn-primary">Info beasiswa</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="/img/2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jurusan</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Info Jurusan</a>
                </div>
            </div>
        </div>
    </div>
@endsection

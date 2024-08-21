@extends('layouts.mainUser')

@section('navbar')
    <h1>Sastra Inggris</h1>
    <div class="card mb-5">
        <div class="row g-0">
            <div class="col-md-8">
                <img src="/img/1.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h2 class="card-title">S1 Sastra Inggris</h2>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p> --}}
                    <p class="card-text"><small class="text-body-secondary">English For Creative Industry</small></p>
                    <a href="/beasiswa" class="btn btn-primary">Info Beasiswa</a>
                </div>
            </div>
        </div>
    </div>
@endsection

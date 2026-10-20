@extends('layouts.master')
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('images/profil.jpeg') }}" class="img-fluid rounded-start" alt="Gambar Profil">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Profil Saya</h5>
                    <p class="card-text">Kelas: XI RPL 1<br>Absen: 6</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
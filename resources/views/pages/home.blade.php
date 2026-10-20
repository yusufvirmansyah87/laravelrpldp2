@extends('layouts.master')
@section('content')
<h2>{{ $judul1 }}</h2>
<h3 class="mb-5">{{ $judul2 }}</h3>
<div class="text-primary text-center py-2">
    <h1>Selamat datang di </h1>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <h3 class="text-primary">Produk 1</h3>
                <p>Informasi Produk 1.</p>
                <a href="{{ url('/profil') }}" class="btn btn-primary">
                    Detail 
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <h3 class="text-primary">Produk 2</h3>
                <p>Informasi Produk 2.</p>
                <a href="{{ url('/profil') }}" class="btn btn-primary">
                    Detail 
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <h3 class="text-primary">Produk 3</h3>
                <p>Informasi Produk 3.</p>
                <a href="{{ url('/profil') }}" class="btn btn-primary">
                    Detail 
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <h3 class="text-primary">Produk 4</h3>
                <p>Informasi Produk 4   .</p>
                <a href="{{ url('/profil') }}" class="btn btn-primary">
                    Detail 
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
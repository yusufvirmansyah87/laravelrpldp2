@extends('layouts.master')
@section('content')
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
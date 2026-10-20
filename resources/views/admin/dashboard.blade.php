@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="bi bi-folder-fill fs-1 text-primary"></i>
                <h5 class="mt-3">
                    Kategori Artikel
                </h5>
                <h2>5</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="bi bi-newspaper fs-1 text-success"></i>
                <h5 class="mt-3">
                    Artikel
                </h5>
                <h2>12</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="bi bi-person fs-1 text-danger"></i>
                <h5 class="mt-3">
                    Administrator
                </h5>
                <h2>1</h2>
            </div>
        </div>
    </div>
</div>

@endsection
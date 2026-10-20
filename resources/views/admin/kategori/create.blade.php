@extends('layouts.admin')
@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tambah Kategori Artikel</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan nama kategori">
            </div>
            <button type="submit" class="btn btn-primary">
                Simpan
            </button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>
@endsection
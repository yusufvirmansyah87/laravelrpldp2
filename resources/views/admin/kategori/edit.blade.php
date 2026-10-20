@extends('layouts.admin')
@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Kategori Artikel</h5>
    </div>
    
    <div class="card-body">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}">
            </div>
            
            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3>Kategori Artikel</h3>
            <p class="text-muted mb-0">
                Kelola Kategori Artikel Website.
            </p>
        </div>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Tambah Kategori
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th width="80">No</th>
                            <th>Nama Kategori</th>
                            <th width="200">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kategori as $item)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', $item->id) }}"class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                    Edit
                                </a>
                                
                                <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                        <td colspan="3" class="text-center">  Belum ada data kategori. </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
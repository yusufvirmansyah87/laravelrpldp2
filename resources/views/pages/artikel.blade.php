@extends('layouts.master')
@section('content')
    <h2 class="mb-4 text-primary">
    Artikel Terbaru
    </h2>

    <div class="card shadow mb-4">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('images/berita/berita1.jpg') }}" class="img-fluid rounded-start" alt="Berita 1">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">
                        Hari Ini, Prabowo Akan Resmikan Molinas, Ekosistem Motor Listrik Nasional
                    </h4>
                    <p class="card-text">
                        Presiden Republik Indonesia Prabowo Subianto akan meresmikan Ekosistem Motor Listrik Nasional (Molinas) di fasilitas produksi PT Ilectra Motor Group (ALVA), di Cikarang, Kabupaten Bekasi, Jawa Barat.
                    </p>
                    <a href="{{ url('/readmore') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
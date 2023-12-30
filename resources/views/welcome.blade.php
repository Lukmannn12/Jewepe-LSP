@extends('navbar/nav2')
@section('container')



<section id="hero">
    <div id="hero-greeting">
        <div class="container crud-container">
            <h1 style="font-size: 35px; font-weight:700;"><strong>JeWePe</strong></h1>
            <h1 style="font-size: 35px; font-weight:700;">E-Mading</h1>
        </div>
    </div>
    <div id="hero-img">
        <img src="img/unsplash.png" width="400" alt="hero banner">
    </div>
</section>


<section class="container-fluid" style="background-color: #F2F2F2;">
    <div class="row justify-content-center" style="padding: 100px;">
        <h1 class="judulartikel" style="font-size: 30px; ">&nbsp;List Artikel</h1>
        @foreach ($data as $row)
            @if ($row->status === 'publish')
                <div class="col-md-6 mb-4 mr-md-2" style="margin-top: 50px;">
                    <div class="card d-flex align-items-center justify-content-center mx-auto" style="width: 500px; height: 650px; overflow: hidden;">
                        <a href="{{ route('detail', $row->id_artikel) }}">
                            <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->judul }}" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" />
                        </a>
                        <div class="card-body text-center" style="width: 100%;">
                            <div class="d-flex justify-content-between mb-2">
                                <p class="card-text" style="font-size: 14px;"><strong>{{ $row->tanggal }}</strong></p>
                                <p class="card-text" style="font-size: 14px;"><strong>{{ $row->nama_pen }}</strong></p>
                            </div>
                            <h5 class="card-title fw-bold" style="text-align: left;">{{ $row->judul }}</h5>
                            <p class="card-text mt-3" style="text-align: left;">{{ \Illuminate\Support\Str::limit($row->isi, 200) }}</p>
                            <a href="{{ route('detail', $row->id_artikel) }}" class="btn btn-custom mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>










@endsection
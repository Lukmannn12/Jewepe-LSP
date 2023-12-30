@extends('navbar/nav2')

@section('container')
    <section class="container-fluid custom-section">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->judul }}" class="img-fluid mb-4"/>
                <div class="text mt-4 mb-4" style="text-align: justify; font-size: 30px;">
                    <p><strong>{{ $data->judul }}</strong></p>
                </div>

                <div style="text-align: justify;">
                    @foreach (explode("\n", $data->isi) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

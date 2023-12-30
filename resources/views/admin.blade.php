@extends('navbar/nav')
@section('container')

<body>
  <table class="table tabel-container">
    <div class="container">
      <h1>Tabel Artikel</h1>
      <a href="{{ route('tambahartikel') }}" class="btn btn-success" style="margin-top: 30px;">Tambah Artikel</a>
    </div>

    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Nama Penulis</th>
        <th scope="col">Tanggal</th>
        <th scope="col"> Isi Artikel</th>
        <th scope="col">Gambar</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">Aksi</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @php
      $no = 1;
      @endphp
      @foreach ($data as $row)
      <tr>
        <th scope="row">{{ $no++ }}</th>
        <td>{{ $row->judul }}</td>
        <td>{{ $row->nama_pen }}</td>
        <td>{{ $row->tanggal }}</td>
        <td>{{ $row->isi }}</td>
        <td>
          <img src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->nama_pen }}" width="100">
        </td>
        <td>{{ $row->created_at->format('D M Y') }}</td>
        <td>
          <a href="/edit/{{ $row->id_artikel }}" class="btn btn-primary">Edit</a>
          <a href="/deleteartikel/{{ $row->id_artikel }}" class="btn btn-danger">Delete</a>
        </td>
        <td>
          @if ($row->status == 'publish')
              <span class="badge bg-success">{{ $row->status }}</span>
          @else
              <span class="badge bg-danger">{{ $row->status }}</span>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box align-items-center text-center">
                                <h1 class="mb-5" style="margin-top: 10px;">Edit Artikel</h1>
                            </div>
                        </div>
                        <div class="col-12">
                           <form action="{{ route('updateartikel', ['id_artikel' => $data->id_artikel]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="{{ $data->judul }}">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="nama_pen" class="form-label">Nama Penulis</label>
                                <input type="text" name="nama_pen" class="form-control" id="nama_pen" value="{{ $data->nama_pen }}">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $data->tanggal }}">
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">Isi Artikel</label>
                                <textarea name="isi" class="form-control" id="isi" placeholder="Masukkan Isi Artikel" style="height: 200px" rows="6">{{ $data->isi }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="status" aria-label="Default select example">
                                    <option selected>Pilih Status</option>
                                    <option value="publish" {{ $data->status === 'publish' ? 'selected' : '' }}>Publish</option>
                                    <option value="draft" {{ $data->status === 'draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="/admin" class="btn btn-danger">Batal</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>

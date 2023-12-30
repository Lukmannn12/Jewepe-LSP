<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Artikel</title>
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
                                <h1 class="mb-5" style="margin-top: 10px;">Tambah Artikel</h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <form action="{{ route('simpanartikel') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    placeholder="Masukkan Judul Artikel" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="penulis" class="form-label">Nama Penulis</label>
                            <input type="text" name="nama_pen" class="form-control" id="nama_pen"
                                placeholder="Masukkan Nama Penulis" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_artikel" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="isi_artikel" class="form-label">Isi Artikel</label>
                            <textarea name="isi" class="form-control" id="isi"
                                placeholder="Masukkan Isi Artikel" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control-file" id="image" accept="image/*"
                                required>
                        </div> 
                        <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="status" aria-label="Default select example" >
                            <option selected>Pilih Status</option>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-primary" type="submit">Kembali</button>
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
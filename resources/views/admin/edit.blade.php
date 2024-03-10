<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Tambah Menu</title>
    <!-- Vendors styles-->
    <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="../css/examples.css" rel="stylesheet">
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <form action="/simpanedit/{{$dtbuku->id }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <h1>Tambah Menu</h1>
                                    <p class="text-medium-emphasis">Isi Untuk Mengubah Menu</p>
                                    <div class="input-group mb-3"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="judul" placeholder="Masukan Menu"
                                            value="{{$dtbuku->judul}}" required>
                                    </div>
                                    <div class="input-group mb-4"><span class="input-group-text">   
                                        </span>
                                        <input class="form-control" type="text" name="noisbn" placeholder="Masukan Harga"
                                            value="{{$dtbuku->noisbn}}" required>
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="penulis" placeholder="Masukan Foto"
                                            value="{{$dtbuku->penulis}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="penerbit" placeholder="Masukan Foto"
                                            value="{{$dtbuku->penerbit}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="tahun" placeholder="Masukan Foto"
                                            value="{{$dtbuku->tahun}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="stok" placeholder="Masukan Foto"
                                            value="{{$dtbuku->stok}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="harga_pokok" placeholder="Masukan Foto"
                                            value="{{number_format($dtbuku->harga_pokok)}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="harga_jual" placeholder="Masukan Foto"
                                            value="{{number_format($dtbuku->harga_jual)}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="text" name="diskon" placeholder="Masukan Foto"
                                            value="{{$dtbuku->diskon}}">
                                    </div>
                                    <div class="input-group mb-5"><span class="input-group-text">
                                        </span>
                                        <input class="form-control" type="file" name="foto" placeholder="Masukan Foto"
                                            value="{{$dtbuku->foto}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-6" type="submit">Ubah Menu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-5 text-white bg-primary py-5">
                    <div class="card-body text-center">
                        <a href="/crud" class="btn btn-lg btn-outline-light mt-3" type="button">Kembali Ke Halaman
                            Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
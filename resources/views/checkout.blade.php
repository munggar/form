<link rel="stylesheet" href="../css/checkout.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@notifyCss

<body>
    <x:notify-messages />

    <div class="blog-card alt">
        <div class="meta">
            <div class="photo">
                <img src="{{asset('storage/'.$dtbuku ->foto)}}" alt="" width="260" height="370">
            </div>
            <ul class="details">
                <li class="tags">NOISBN : {{ $dtbuku->noisbn }}</li>
                <li class="author">Penerbit : {{ $dtbuku->penerbit }}</li>
                <li class="date">Stok : {{ $dtbuku->stok }}</li>
            </ul>
        </div>
        <div class="description">
            <div align="center">
                <h1> {{ $dtbuku->judul }} </h1>
                <h2> {{ $dtbuku->penulis }}</h2>
                <form action="/simpancheckout/{{ $dtbuku->id }}" method="post">
                    {{ csrf_field() }}
                    <p>Masukan Detail Pesanan Anda!</p>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="nama" placeholder="Nama" class="form-control" required> <br>
                </div>
                <div class="col">
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="telp" placeholder="No.Telpon" class="form-control" required> <br>
                </div>
                <div class="col">
                    <input type="number" name="jumlah" value="{{ $jumlah }}" placeholder="Jumlah"
                        class="col-auto form-control" required> <br>
                </div>
                <input type="hidden" name="id_pembelian" class="form-control" value="{{ $dtbuku->id }}"> <br>
            </div>
            <div class="piih">
                <div class="">
                    <a href="/halaman" class="btn btn-outline-warning">Kembali</a>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-success">Beli Sekarang!</button>
                </div>
            </div>
            </form>
        </div>
        @notifyJs
    </div>
</body>
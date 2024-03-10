@include('include.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<table class="table-responsive table table-hover text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Foto</th>
            <th>Noisbn</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Harga Pokok</th>
            <th>Harga Jual</th>
            <th>Diskon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($dtbuku as $item)
    <tr>
        
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->judul }}</td>
        <td><img src="{{ asset('storage/'.$item->foto) }}" class="img-circle img-responsive img " width="100" srcset=""></td>
        <td>{{ $item->noisbn }}</td>
        <td>{{ $item->penulis }}</td>
        <td>{{ $item->penerbit }}</td>
        <td>{{ $item->tahun }}</td>
        <td>{{ $item->stok }}</td>
        <td>{{ $item->harga_pokok }}</td>
        <td>{{ $item->harga_jual }}</td>
        <td>{{ $item->diskon }}</td>
        <td><a class="btne" href="/edit/{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i></a> | <a
                class="btne" href="/hapus/{{ $item->id }}"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    @endforeach
</table>
<a href="admin" class="btn btn-outline-warning" align="center">back</a>

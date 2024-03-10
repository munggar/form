@include('include.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<table class="table-responsive table table-hover text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($pelanggan as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>  
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->telp}}</td>
        <td>{{ $item->jumlah }}</td>
        <td><a class="btne" href="/edit1/{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i></a> | <a
                class="btne" href="/hapus1/{{ $item->id }}"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    @endforeach
</table>
<a href="admin" class="btn btn-outline-warning" align="center">back</a>
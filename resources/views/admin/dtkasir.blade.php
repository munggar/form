@include('include.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<table class="table-responsive table table-hover text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Status</th>
            <th>Username</th>
            <th>Password</th>
            <th>Akses</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($dtkasir as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>
        <td><img src="{{ asset('storage/'.$item->foto) }}" class="img-circle img-responsive img " width="100" srcset=""></td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->telepon }}</td>
        <td>{{ $item->status_kasir }}</td>
        <td>{{ $item->username }}</td>
        <td>{{ $item->passwd }}</td>
        <td>{{ $item->akses }}</td>
        <td><a class="btne" href="/edit/{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i></a> | <a
                class="btne" href="/hapus/{{ $item->id }}"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    @endforeach
</table>
<a href="admin" class="btn btn-outline-warning" align="center">back</a>
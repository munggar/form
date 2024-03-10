<link rel="stylesheet" href="../css/kasir.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="input-field-with-icon">
    <form action="/simpankasir" enctype="multipart/form-data" method="post">
        @csrf

        <span class="icon"> <i class="fa-solid fa-user"></i>
            <input autocomplete="username" type="text" name="nama" placeholder="Nama" required>
        </span>

        <span class="icon"> <i class="fa-solid fa-image"></i>
            <input type="file" name="foto" required>
        </span>

        <span class="icon"><i class="fa-solid fa-address-card"></i>
            <input autocomplete="alamat" type="text" name="alamat" placeholder="Alamat" required>
        </span>

        <span class="icon"><i class="fa-solid fa-phone"></i>
            <input autocomplete="telepon" type="text" name="telepon" placeholder="Telepon" required>
        </span>

        <br>
        <span class="icon"><i class="fa-solid fa-barcode"></i>
            <input type="text" name="status_kasir" placeholder="Status" required>
        </span>

        <span class="icon"></span>
        <input autocomplete="username" type="text" name="username" placeholder="username" required>

        <input type="password" name="passwd" placeholder="password" required>

        <input autocomplete="akses" type="text" name="akses" placeholder="Akses" required>
        <br>
        <br>
        <button class="button button btn btn-outline-success" type="submit">Let's Go!</button>
        <br>
        <br>
        <a href="/admin" class="button btn btn-outline-info"><i class="fa-solid fa-arrow-rotate-left"></i>&ensp;Back</a>
    </form>
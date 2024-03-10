<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/buku.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="input-field-with-icon">
    <form action="/simpanisi" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <span class="icon"> <i class="fa-solid fa-book"></i>
            <input autocomplete="username" type="text" name="judul" placeholder="Judul Buku" required>
        </span>

        <span class="icon"> <i class="fa-solid fa-image"></i>
            <input type="file" name="foto" required>
        </span>

        <span class="icon"><i class="fa-solid fa-note-sticky"></i>
            <input autocomplete="noisbn" type="text" name="noisbn" placeholder="noisbn" required>
        </span>

        <span class="icon"> <i class="fa-solid fa-pen"></i>
            <input autocomplete="penulis" type="text" name="penulis" placeholder="penulis" required>
        </span>

        <br>
        <span class="icon"> <i class="fa-regular fa-copy"></i>
            <input autocomplete="penerbit" type="text" name="penerbit" placeholder="penerbit" required>
        </span>
        <span class="icon"><i class="fa-solid fa-calendar"></i>
            <input autocomplete="tahun" type="text" name="tahun" placeholder="tahun" required>
        </span>

        <span class="icon"><i class="fa-solid fa-truck-field"></i>
            <input autocomplete="stok" type="text" name="stok" placeholder="stok" required>
        </span>
        
        <span class="icon"><i class="fa-solid fa-tags"></i>
            <input autocomplete="pokok" type="text" name="harga_pokok" placeholder="harga pokok" required>
        </span>

        <br>
        <span class="icon"><i class="fa-solid fa-money-bill-wave"></i>
            <input autocomplete="jual" type="text" name="harga_jual" placeholder="harga jual" required>
        </span>

        <span class="icon"><img src="images/discount.png" width="25" alt="">
            <input autocomplete="diskon" type="text" name="diskon" placeholder="diskon" required>
        </span>
        <br>
        <br>
        <button class="button button btn btn-outline-success" type="submit">Let's Go!</button>
        <br>
        <br>
        <a href="/admin" class="button btn btn-outline-info"><i class="fa-solid fa-arrow-rotate-left"></i>&ensp;Back</a>
    </form>
</div>
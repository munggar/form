<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link rel="stylesheet" href="../css/admin.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<x:notify-messages />
<!-- header -->
<hgroup class="heading">
  <h1 class="major">Selamat Datang {{ Auth::user()->name }} </h1>
  </hgroup>
  
  <!-- form starts here -->
  <form class="sign-up" align="center">
      <h1 class="sign-up-title">Silahkan Pilih Piihan Berikut</h1>
      <div class="dropdown">
        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Isi data
        </a> 
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="/buku">Isi Data Buku</a></li>
          <li><a class="dropdown-item" href="/kasir">Isi Data Kasir</a></li>
        </ul>
      </div>
      <br>
      <div class="dropdown">
        <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Tampilkan Data
        </a> 
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="/crud">Tampilkan Data Buku</a></li>
          <li><a class="dropdown-item" href="/kasir">Tampilkan Data Kasir</a></li>
          <li><a class="dropdown-item" href="/pelanggan">Tampilkan Data Pelanggan</a></li>
        </ul>
      </div>
    </form>
      <div class="about">
        <p class="about-links"> <a href="/logout"> Logout </a> </p>
        <p class="about-author">
          &copy; 2022 <a href="#" target="_blank">Toko Buku</a> -
          <a href="#" target="_blank">No Counter</a><br>
          Admin toko buku by <a href="#" target="_blank">Munggar e&</a>
        </p>
      </div>  
@notifyJs
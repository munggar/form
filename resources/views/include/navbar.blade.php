<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="/halaman"><img width="250" src="images/logo.png" alt="#" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/halaman">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/product">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/testimoni">Kasir Kami</a>
            </li>
            @auth()
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true">
                    <span class="nav-label">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/cart">Keranjang</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </li>
            @else
            <li class="nav-item">
                <a href="/registrasius" class="nav-link">Register!</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
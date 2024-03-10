<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('include.head')
</head>

<body>
	<x:notify-messages />
    <!-- Header section -->
    <header class="header_section">
        <div class="container">
            @include('include.navbar')
        </div>
    </header>
    <!-- Header section end -->


    <!-- Page Info -->
    <div class="inner_page_head">
        <div class="container_fluid">
            <div class="site-breadcrumb">
                <h3>Keranjang</h3>
            </div>
            <img src="img/page-info-art.png" alt="" class="page-info-art">
        </div>
    </div>
    <!-- Page Info end -->


    <!-- Page -->
    <div class="page-area cart-page spad">
        <div class="container">
            <div class="cart-table">
                @if (empty($cart) || count($cart) == 0)
                <br>
                @else
                <table>
                    <thead>
                        <tr>
                            <th align="center">Judul</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $grandtotal = 0;
                        @endphp
                        @foreach ( $cart as $item => $val)
                        @php
                        $subtotal = $val['harga_jual'] * $val['jumlah'];
                        $total = $val['harga_jual'] - $val['harga_jual']*$val['diskon']/100;
                        @endphp
                        <tr>
                            <td><div class="pc-title" style="margin-left: 90px">{{ $val['judul'] }}</div></td>
                            <td class="product-col" style="margin-left: 170px"><img src="{{ asset('storage/'.$val['foto']) }}" alt=""></td>
                            <td class="price-col"><s>Rp. {{ number_format($val['harga_jual'])  }}</s> <br>
                                Rp. {{ number_format($val['harga_jual'] - $val['harga_jual']*$val['diskon']/100) }}</td>
                            <td class="quy-col"><div class="quy-input">{{ $val['jumlah'] }}</div></td>
							<td><a href="/checkout/{{ $item }}" style="margin-left: 40px"class="btn btn-outline-success"> <i class="fa-solid fa-money-bill"></i> </a> | 
                                <a href="/hapuscart1/{{ $item }}" class="btn btn-outline-danger"> <i class="fa-solid fa-trash"></i> </a></td>
                            </tr>
                        @php
                        $grandtotal += $subtotal = $total;
                        @endphp
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="card card-1 p-4">
                <strong align="center" >Total Harga</strong>
                <div class="total"> 
                    <div class=""> Semua Produk :</div>
                    <div class=""> Rp. {{ number_format($grandtotal)  }}</div>
                </div>
            </div> <br> <br> 
            @endif
            <div class="row-buttons">
				@if (empty($cart) || count($cart) == 0)
                <div class="col-lg-5 col-md-5">
					<a href="/product">
                        <div class="site-button">Mulai Belanja</div>
                    </a>
                </div>
                @else
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
                    <a href="/product"> <div class="site-button">Lanjutkan Belanja</div> </a>    
					<a href="cart/hapus" onclick="return confirm ('Yakin Ingin Menghapus Semua item di Keranjang?')">
						<div class="site-btn btn-clear">Bersihkan Keranjang</div>
					</a>
				</div>
				@endif
            </div>
        </div>
    </div>
    <!-- Page end -->


    <!-- footer start -->
	@include('include.footer')
    <!-- Footer section end -->
        <!-- jQery -->
        <script src="../js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="../js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="../js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="../js/custom.js"></script>
		@notifyJs

</body>

</html>
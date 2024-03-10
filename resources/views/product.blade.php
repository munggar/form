<!DOCTYPE html>
<html>
   <head>
      <title>Toko Buku No Counter - Produk Kami</title>
      @include('include.head')
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               @include('include.navbar')
            </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($dtbuku as $buku)
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="/cart/tambah/{{ $buku->id }}" class="option1">
                              Masukan Keranjang
                              </a>
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{asset('storage/'.$buku ->foto)}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{ $buku ->judul }}
                        </h5>
                        <h6>
                           Rp.{{ number_format($buku ->harga_jual) }}
                        </h6>
                     </div>
                  </div>
               </div>
               @endforeach
               </div>
         </div>
      </section>
      <!-- end product section -->

   <!-- footer start -->
   @include('include.footer')
   <!-- footer end -->
   
  <div class="cpy_">
      <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

          Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

      </p>
      <!-- Footer section end -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>
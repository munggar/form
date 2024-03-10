<!DOCTYPE html>
<html>
   <head>
      <title>Toko Buku No Counter - Kasir Kami</title>
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
                     <h3>Mereka yg akan melayanimu!</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
         <!-- end inner page section -->
      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Kasir Kami
               </h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  @foreach ($dtkasir as $kasir)
                  <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="{{asset('storage/' . $kasir->foto)}}" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                            {{ $kasir->nama }}
                           </h5>
                           <h6>@
                            {{ $kasir->username }}
                           </h6>
                           <p>
                            {{ $kasir->akses }}   
                           </p>
                        </div>
                     </div>
                  </div>
                  @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
         </div>
      </section>
      <!-- end client section -->

      <!-- footer section -->
      @include('include.footer')
      <!-- footer section -->

      <a href="#" class="cd-top text-replace js-cd-top">Top</a>

      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/top.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>
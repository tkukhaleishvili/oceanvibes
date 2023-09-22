<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Ocean vibes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Ocean Vibes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="{{ url('/pages/products') }}" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="{{ url('/pages/contact') }}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
              <h1 class="mb-3"> Our Exclusive Menu</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
            <div class="block-17">
              <form action="#" method="post" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">

                  <div class="textfield-name one-third"><input type="text" class="form-control" placeholder="Name"></div>

                  <div class="textfield-phone one-third"><input type="text" class="form-control" placeholder="Phone"></div>

                  <div class="book-date one-third"><input type="text" id="book_date" class="form-control" placeholder="M/D/YYYY"></div>

                  <div class="book-time one-third">
                    <input type="text" id="book_time" class="form-control" placeholder="Time">
                  </div>

                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Person</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4+</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Book a table">  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Our Menu</span>
        <h2>Discover Our Exclusive Menu</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 dish-menu">
        <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach ($categories as $category)
          <a class="nav-link py-3 px-4 {{ $loop->first ? 'active' : '' }}" id="v-pills-{{ str_replace(' ', '-', $category->name) }}-tab" data-toggle="pill" href="#v-pills-{{ str_replace(' ', '-', $category->name) }}" role="tab" aria-controls="v-pills-{{ str_replace(' ', '-', $category->name) }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"><span class="flaticon-cheers"></span> {{ $category->name }}</a>
          @endforeach
        </div>
        <div class="tab-content py-5" id="v-pills-tabContent">
          @foreach ($categories as $category)
          <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="v-pills-{{ str_replace(' ', '-', $category->name) }}" role="tabpanel" aria-labelledby="v-pills-{{ str_replace(' ', '-', $category->name) }}-tab">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @foreach ($category->products as $product)
                  <div class="col-xl-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img">
                        <img src="{{ asset($product->image) }}">
                      </div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>{{ $product->name }}</h3>
                          <p>{{ $product->description }}</p>
                        </div>
                        <div class="one-forth">
                          <span class="price">{{ $product->price }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Gallery</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
              <a href="{{ url('images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url('{{ asset('assets/images/insta-1.jpg') }}');">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ url('images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url('{{ asset('assets/images/insta-2.jpg') }}');">  
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ url('images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url('{{ asset('assets/images/insta-3.jpg') }}');">  
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ url('images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url('{{ asset('assets/images/insta-4.jpg') }}');">  
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ url('images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url('{{ asset('assets/images/insta-5.jpg') }}');">  
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ocean Vibes</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Opening Hours</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Monday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Friday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Saturday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 22:00</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Subscribe">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/aos.js')}}"></script>
  <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>
    
  </body>


</html>
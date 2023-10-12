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
    @if(session('message'))
      <div class="alert alert-info">
          {{ session('message') }}
      </div>
    @endif
  <section class="ftco-section">
    <div class="container">
      <div class="row no-gutters justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2>Login account</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 ftco-animate img"></div>
        <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
          <form action="{{ route('user.login') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password"required>
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <div class="form-group">
                  <input type="submit" value="Login account" class="btn btn-primary py-3 px-5">
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <div class="form-group">
                  <a href="{{ url('/user_register') }}" class="btn btn-primary py-3 px-5">Create account</a>
                </div>
              </div>
              <div class="col-md-6 mt-3">
                @if($errors->has('email'))
                  <div class="alert alert-danger">
                      {{ $errors->first('email') }}
                  </div>
                @endif
                @if($errors->has('password'))
                  <div class="alert alert-danger">
                      {{ $errors->first('password') }}
                  </div>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>

  <script src="{{asset('assets/js/aos.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
    
  </body>


</html>
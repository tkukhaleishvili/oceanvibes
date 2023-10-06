@extends('components.layouts.master')

@section('page_top')


  <h1 class="mb-3">Home</h1>
@endsection
@section('content')


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

@endsection


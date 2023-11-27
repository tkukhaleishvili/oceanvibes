@extends('components.layouts.master')

@section('page_top')
  <h1 class="mb-3">Gallery</h1>
  <br>
@endsection

@section('content')
    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Gallery</span></h2>
          </div>
        </div>
        <div class="row no-gutters ">
        @foreach ($images as $image)
              <div class="col-sm-12 col-lg-4 col-sm-6 ftco-animate">     
                  <div class="icon d-flex justify-content-center">
                    <img src="{{ asset('storage/'.$image->image) }}" class="menu-img img-fluid max-size-image" alt="Responsive image">
                  </div>
              </div>
        @endforeach
        </div>
      </div>
    </section>
<br>
@endsection

    

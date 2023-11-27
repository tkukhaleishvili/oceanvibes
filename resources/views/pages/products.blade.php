@extends('components.layouts.master')

@section('page_top')

  <h1 class="mb-3">Products</h1>
  <br>
@endsection
@section('images')
    @parent

   
@stop

@section('content')

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
          <a class="nav-link py-3 px-4 {{ $loop->first ? 'active' : '' }}" id="v-pills-{{ str_replace(' ', '-', $category->name) }}-tab" data-toggle="pill" href="#v-pills-{{ str_replace(' ', '-', $category->name) }}" role="tab" aria-controls="v-pills-{{ str_replace(' ', '-', $category->name) }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"><span class=""></span> {{ $category->name }}</a>
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
                        <img src="{{ asset('storage/'.$product->image) }}" class="menu-img img-fluid">
                      </div>
                      <div class="text ">
                        <div class="one-half">
                          <h3>{{ $product->name }}</h3>
                          <p>{!! $product->description !!}</p>
                        @if ($product->category_id ==1)
                            <div class="d-flex">
                                <p>&nbsp;&nbsp;&nbsp;Eight &nbsp;&nbsp;  Quarter  &nbsp;&nbsp;  HALF.OZ   &nbsp;&nbsp; Oz</p>
                            </div>
                       @elseif ($product->category_id > 1)
                           <div class="d-flex">
                                <p>&nbsp;1 piece /&nbsp;&nbsp; 3 pieces /&nbsp;&nbsp; 5 pieces / &nbsp;&nbsp; 10 pieces</p>
                            </div>
                        @endif
                        </div>
                        <div class="d-flex">
                          <span class="price"><p>&nbsp;&nbsp;{{ $product->price }}$/</p>&nbsp;&nbsp; </span>
                          <span class="price"><p>&nbsp;&nbsp;{{ $product->price1 }}$/</p>&nbsp;&nbsp; </span>
                          <span class="price"><p>&nbsp;&nbsp;{{ $product->price2 }}$/</p> &nbsp;&nbsp;</span>
                          <span class="price"><p>&nbsp;&nbsp;{{ $product->price3 }}$</p> &nbsp;&nbsp;</span>
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
<br>

<!-- img section start -->
<section class="instagram">
  <div class="container-fluid">
    <div class="row no-gutters justify-content-center pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2><span>Gallery</span></h2>
      </div>
    </div>
    <div class="row no-gutters ">
    @foreach ($images as $image)
          <div class="col-sm-12 col-md ftco-animate">     
              <div class="icon d-flex justify-content-center">
                <img src="{{ asset('storage/'.$image->image) }}" class="menu-img img-fluid" >
              </div>
          </div>
    @endforeach
    </div>
  </div>
</section>
<br>

    <!-- img section end -->
@endsection
@extends('layouts.app')

@section('title')
    Softbay Homepage
@endsection

@section('content')
   <!-- Carousel -->

    <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="container">
    <div class="carousel-item active">
      <div class="row pt-5 justify-content-center">
        <div class="col-9 col-sm-4 col-lg-5">
          <h1 class="mb-4">Special Eid
            Lebaran</h1>
            <p class="mb-4">
              Jadikan hari pertama lebaranmu
              meriah dan memorable
            </p>
            <a href="" class="btn btn-warning text-white">Get It Now</a>
        </div>
        <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
          <img src="images/slideshow/1@2x.png" alt="">
        </div>
      </div>
    </div>
    <div class="carousel-item">
         <div class="row pt-5 justify-content-center">
        <div class="col-9 col-sm-4 col-lg-5">
          <h1 class="mb-4">Special Eid
            Lebaran</h1>
            <p class="mb-4">
              Jadikan hari pertama lebaranmu
              meriah dan memorable
            </p>
            <a href="" class="btn btn-warning text-white">Get It Now</a>
        </div>
        <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
          <img src="images/slideshow/1@2x.png" alt="">
        </div>
      </div>
    </div>
    <div class="carousel-item">
         <div class="row pt-5 justify-content-center">
        <div class="col-9 col-sm-4 col-lg-5">
          <h1 class="mb-4">Special Eid
            Lebaran</h1>
            <p class="mb-4">
              Jadikan hari pertama lebaranmu
              meriah dan memorable
            </p>
            <a href="" class="btn btn-warning text-white">Get It Now</a>
        </div>
        <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
          <img src="images/slideshow/1@2x.png" alt="">
        </div>
      </div>
    </div>
  </div>
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

  <!-- Carousel End -->

    <!-- Brands -->

    <section class="brands">
      <div class="container">
        <div class="row p-5 text-center">
          <div class="col-md">
            <img src="images/brand/uniqlo.png" class="img-fluid" alt="">
          </div>
          <div class="col-md">
            <img src="images/brand/pnb.png" class="img-fluid" alt="">
          </div>
          <div class="col-md">
            <img src="images/brand/cc.png" class="img-fluid" alt="">
          </div>
          <div class="col-md">
            <img src="images/brand/nike.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Brands End -->

    <!-- Features -->

    <section class="features bg-light p-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h3>Special Eid</h3>
            <p>
              Rayakan Lebaran Bersama SoftBay
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <figure class="figure">
              <div class="figure-img">
              <img src="images/feature/1.png" class="figure-img img-fluid " alt="...">
               <a href="" class="d-flex justify-content-center ">
                <img src="images/detail.png" class="align-self-center">
              </a>
             </div>
             <figcaption class="figure-caption text-center">
            <h5>Jeans Pubb</h5>
             <p>
              IDR 190.300
             </p>
            </figcaption>
          </figure>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <figure class="figure">
             <div class="figure-img">
            <img src="images/feature/2.png" class="figure-img img-fluid " alt="...">
             <a href="" class="d-flex justify-content-center ">
            <img src="images/detail.png" class="align-self-center">
             </a>
          </div>
           <figcaption class="figure-caption text-center">
           <h5>White Pure</h5>
            <p>
             IDR 100.039
            </p>
           </figcaption>
          </figure>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <figure class="figure">
             <div class="figure-img">
             <img src="images/feature/3.png" class="figure-img img-fluid " alt="...">
           <a href="" class="d-flex justify-content-center ">
            <img src="images/detail.png" class="align-self-center">
          </a>
         </div>
           <figcaption class="figure-caption text-center">
            <h5>Me Navy</h5>
            <p>
            IDR 189.400
          </p>
         </figcaption>
          </figure>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <figure class="figure">
             <div class="figure-img">
              <img src="images/feature/1.png" class="figure-img img-fluid " alt="...">
              <a href="" class="d-flex justify-content-center ">
              <img src="images/detail.png" class="align-self-center">
             </a>
             </div>
             <figcaption class="figure-caption text-center">
               <h5>Jeans Pubb</h5>
                <p>
                IDR 190.300
              </p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <figure class="figure">
            <div class="figure-img">
              <img src="images/feature/2.png" class="figure-img img-fluid " alt="...">
              <a href="" class="d-flex justify-content-center ">
              <img src="images/detail.png" class="align-self-center">
              </a>
           </div>
            <figcaption class="figure-caption text-center">
             <h5>White Pure</h5>
             <p>
              IDR 100.039
             </p>
            </figcaption>
            </figure>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <figure class="figure">
             <div class="figure-img">
                <img src="images/feature/3.png" class="figure-img img-fluid " alt="...">
                <a href="" class="d-flex justify-content-center ">
             <img src="images/detail.png" class="align-self-center">
           </a>
           </div>
            <figcaption class="figure-caption text-center">
             <h5>Me Navy</h5>
            <p>
               IDR 189.400
            </p>
             </figcaption>
                </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- Features End -->

    <!-- Designer -->

    <section class="designer p-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h3>Our Designers</h3>
            <p>
              Pakaian terbaik dari designer profesional
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-6 col-sm-3 text-center">
              <figure class="figure">
               <img src="images/designer/1.png" class="figure-img img-fluid " alt="...">
                 <figcaption class="figure-caption text-center">
                     <h5>Anne Mortgery</h5>
                        <p>
                        Artistic Cloth
                      </p>
                        </figcaption>
                </figure>
          </div>
            <div class="col-6 col-sm-3 text-center">
              <figure class="figure">
               <img src="images/designer/2.png" class="figure-img img-fluid " alt="...">
                 <figcaption class="figure-caption text-center">
                     <h5>Clore Fynn</h5>
                        <p>
                        Explorer
                      </p>
                        </figcaption>
                </figure>
          </div>
            <div class="col-6 col-sm-3 text-center">
              <figure class="figure">
               <img src="images/designer/3.png" class="figure-img img-fluid " alt="...">
                 <figcaption class="figure-caption text-center">
                     <h5>Artagnan</h5>
                        <p>
                        Designer
                      </p>
                        </figcaption>
                </figure>
          </div>
            <div class="col-6 col-sm-3 text-center">
              <figure class="figure">
               <img src="images/designer/4.png" class="figure-img img-fluid " alt="...">
                 <figcaption class="figure-caption text-center">
                     <h5>Ling Ko</h5>
                        <p>
                        Color Explorer
                      </p>
                        </figcaption>
                </figure>
          </div>
        </div>

        <div class="row m-3">
          <div class="col text-center">
            <a href="">See All Our Designers</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Designer End -->

@endsection

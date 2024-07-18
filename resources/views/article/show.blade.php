<x-main>

  <header class="" style="background-color: #CBE5EE; padding: 60px 0px;">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                </div>
            </div>
        </div>
    </div>
</header>

{{-- swiper --}}
<div class="container container-fluid mt-5 pt-5">
  <div class="row">
      <div class="col-12 col-md-6">
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2"> {{-- swiper-navigation swiper-pagination --}}
              <div class="swiper-wrapper">
                @foreach ($article->images as $key => $image)
                <div class="swiper-slide">
                  <img src="{{$image->getUrl(300, 300)}}" alt="Immagine dell'articolo {{$article->title}}" class="img-fluid rounded-3">
                </div>
                @endforeach
                @if ($article->images->isEmpty())
                <div class="swiper-slide">
                  <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="border-radius: 35px" class="img-fluid rounded-3" alt="...">
                </div>
                @endif
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                @foreach ($article->images as $key => $image)
                <div class="swiper-slide">
                  <img src="{{$image->getUrl(300, 300)}}" alt="Immagine dell'articolo {{$article->title}}" class="img-fluid rounded-3">
                </div>
                @endforeach
                @if ($article->images->isEmpty())
                <div class="swiper-slide">
                  <img src="https://dummyimage.com/300x300/d4d4d4/fff" style="border-radius: 35px" class="img-fluid rounded-3" alt="...">
                </div>
                @endif
              </div>
          </div>
      </div>
      {{-- end swiper --}}

      <div class="col-12 col-md-6" >
          <h5 class="h2">{{$article->title}}</h5>
          <div class="rating w-25">
              <input type="radio" name="rating" id="r1">
              <label for="r1"></label>
              <input type="radio" name="rating" id="r2">
              <label for="r2"></label>
              <input type="radio" name="rating" id="r3">
              <label for="r3"></label>
              <input type="radio" name="rating" id="r4">
              <label for="r4"></label>
              <input type="radio" name="rating" id="r5">
              <label for="r5"></label>
          </div>
          
          <h5>€ {{$article->price}}</h5>
          <hr>
          <p class="fw-normal">{{$article->description}}</p>
          <div class="row">
              <div class="col-12 col-md-6 d-flex flex-row">
                  <button type="button" class="quantity">quantità</button>
                  <button type="button" class="cart">aggiungi al carrello</button>
              </div>                        
          </div>
      </div>
  </div>            
</div>


<x-slot:swiper>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</x-slot:swiper>


</x-main>

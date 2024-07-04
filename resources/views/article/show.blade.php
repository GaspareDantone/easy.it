<x-main>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center mt-5">
            <h1>Pagina Dettaglio di: {{$article->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center mt-5">
            <div class="card" style="width: 50rem; border:none; ">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" class="carousel slide" style="width:800px">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/800/400" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/800/400" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/800/400" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="card-body ">
                  <p class="card-text">{{$article->description}}</p>
                  <p class="card-text">{{$article->category->name}}</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        </div>
    </div>
</div>

</x-main>
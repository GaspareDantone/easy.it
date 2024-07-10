<x-main>
    <body>
        {{-- container-->row-->col12/colmd6*2 --}}
        {{-- container-->row-->col12/colmd3*4 --}}
        <div class="container container-fluid mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2"> {{-- swiper-navigation swiper-pagination --}}
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/a3a3a3/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/b5b5b5/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/c6c6c6/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/a1a1a1/fff" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="col-12 col-md-6" >
                    <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
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
                    
                    <h5>PRICE $100.00</h5>
                    <hr>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos optio repudiandae doloribus itaque vel quo deserunt modi perferendis. Dolor mollitia beatae delectus reprehenderit laborum consequatur facilis reiciendis, facere minus ipsa.</p>
                </div>
            </div>
            
            
            {{-- <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div> --}}
            
            
            {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
        </body>
        
        {{-- <script>
            /* SWIPER */
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
            
            //* MY-SWIPER 
            
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },
                
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                
                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
            
        </script> --}}
    </x-main>
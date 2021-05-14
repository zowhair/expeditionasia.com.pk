<script type="text/javascript" src="{{ asset('js/jquery3.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/bootstrap4.6.bundle.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/gallery-bottom.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/fontawesome.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/brands.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/solid.min.js') }}"></script>
              <script src="{{ asset('js/bootnavbar.js') }}" ></script>
              <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
        <script>
            AOS.init();
            $(document).ready(function(){

            if($('.brands_slider').length)
            {
                var brandsSlider = $('.brands_slider');

            brandsSlider.owlCarousel(
            {
                loop:true,
                autoplay:true,
                autoplayTimeout:5000,
                nav:false,
                dots:false,
                autoWidth:true,
                items:8,
                margin:42
            });

            if($('.brands_prev').length)
            {
                var prev = $('.brands_prev');
                prev.on('click', function()
            {
                brandsSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.brands_next').length)
            {
                var next = $('.brands_next');
                next.on('click', function()
            {
                brandsSlider.trigger('next.owl.carousel');
                });
                }
            }


            });

              </script>
            <script type="text/javascript">
              $(function () {
                        $('#main_navbar').bootnavbar();
                    })
            </script>

          
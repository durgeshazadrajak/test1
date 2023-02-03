<footer>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-2 col-md-2">
                <div class="logo-section mb-3">
                    <img src="assets/img/home/logo.webp" alt="footer-logo" class="footer-logo">
                </div> 
            </div>            
            <div class="col-lg-3 col-md-3">                
                <p class="mb-1">PEK CHUAN BUILDING </p>
                <p class="mb-0">#01-04, 116 LAVENDER STREET</p>
            </div>
            <div class="col-lg-3 col-md-3">
                <p class="mb-0">+65 6291 1211<br> +65 8228 5201<br> ENQUIRY@INTERIORDIARY.COM.SG</p>
            </div>            
        </div>
    </div>
    <div class="container-fluid copyright-section">
        <div class="container">
            <div class="row justify-content-end ">
                <div class="col-lg-6 col-md-6 text-end">                
                    <p>Web Design By <a href="https://websentials.com.sg/" target="_blank">Websentials <img src="assets/img/home/websentials.png" width="25" alt="websentials"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- <a href="https://api.whatsapp.com/send?phone=91144986" target="_blank" class="floating-icon">
    <img src="assets/img/gallery/wa.svg">
</a> -->



<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js"></script> 
<script>
  feather.replace()
</script>

 <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
      },
      speed:2000,      
    });
  </script>

<script type="text/javascript">
   $(document).ready(function() {      

        // services slider
        $('.owl-carousel.reviews-slider').owlCarousel({
            dots:false,
            nav: false,
            margin: 30,
            center: true,
            items:2,        
            responsive: {
                0: {
                    items: 1,
                    nav:false
                },
                600: {
                    items: 2,
                    nav:false
                },
                1000: {
                    items: 4
                }
            }
        });

        // feature slider
        $('.owl-carousel.feature-slider').owlCarousel({
            dots:false,
            nav: true,
            margin: 20,
            center: true,
            items:1,        
            responsive: {
                0: {
                    items: 1,
                    nav:false
                },
                600: {
                    items: 1,
                    nav:false
                },
                1000: {
                    items: 1
                }
            }
        });


    });
  </script>
</body>
</html>

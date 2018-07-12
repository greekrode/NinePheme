<script src="vendor/jquery-1.11.0.min.js"></script>
<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
<script src="vendor/bootstrap.js"></script>
<script src="vendor/jquery.flexnav.min.js"></script>
<script src="vendor/jquery.hoverIntent.minified.js"></script>
<script src="vendor/jquery.flickrfeed.js"></script>
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<script src="vendor/isotope/jquery.imagesloaded.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="vendor/jquery.fitvids.js"></script>
<script src="vendor/jquery.appear.js"></script>
<script src="vendor/jquery.stellar.min.js"></script>
<script src="vendor/flexslider/jquery.flexslider-min.js"></script>

<!-- Newsletter Form -->
<script src="vendor/jquery.validate.js"></script>
<script src="js/newsletter.js"></script>

<script src="js/custom.js"></script>

<!-- Google Map -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="vendor/jquery.gmap3.min.js"></script>

<script>
    jQuery(function($){
        $('body').addClass('loading');
    });

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            controlNav: true,
            directionNav: false,
            prevText: "",
            nextText: "",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>

<!-- Google Map Init-->
<script>
        function initMap() {
            var uluru = {lat: 3.579589, lng: 98.692321};
            var map = new google.maps.Map(document.getElementById('map_canvas'), {
              zoom: 4,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
    
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZDrvYEc8_aKjwyR-A_K5kLKT0wBC2Ph0&callback=initMap">
        </script>

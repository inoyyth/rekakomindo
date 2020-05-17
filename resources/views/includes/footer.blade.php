<div class="footer">
    <div class="container">
    <h2 class="wthree_head">Subscribe to Newsletter</h2>
            <p class="agileits_w3layouts_para w3_agile_para">Get new info from us.</p>

            <div class="news-w3l">
                <form action="/" method="get">
                    <input type="email" name="Email" placeholder="Enter Your Email..." required="">
                    <input type="submit" value="Send">
                </form>
            </div>
        <div class="agile_footer_copy">
            <div class="w3agile_footer_grids">

                <div class="col-md-4 w3agile_footer_grid">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Grand Galaxy Jl Nusa Indah Raya Blok W No 1, <span>Bekasi Selatan 17147.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">customercare.rekakomindo@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>021 827 35 929</li>
                    </ul>
                </div>
                <div class="col-md-4 w3agile_footer_grid"></div>
                <div class="col-md-4 w3agile_footer_grid">
                    <h3>Why Us</h3>
                    <p>We always calculate every single risk possibility that could lead to system
                        failure very careful and thorough. These result, give our clients a strong and secure
                        mechanical electrical system.</p>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>

    </div>

</div>
<script src="{{ URL::asset('themes/js/simpleLightbox.js') }}"></script>
<script>
    $('.w3_agile_gallery_grid a').simpleLightbox();
</script>
<script src="{{ URL::asset('themes/js/jarallax.js') }}"></script>
<script src="{{ URL::asset('themes/js/SmoothScroll.min.js') }}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- //jarallax -->
 <!-- flexSlider -->
<script defer src="{{ URL::asset('themes/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            $('body').removeClass('loading');
        }
        });
    });
</script>
<!-- //flexSlider -->
<script src="{{ URL::asset('themes/js/bootstrap.js') }}"></script>
@stack('scripts')

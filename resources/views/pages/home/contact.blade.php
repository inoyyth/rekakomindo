@extends('layouts.default')
@section('content')
<!-- mail -->
<div class="agileits_w3layouts_mail_grids">
    <div class="col-md-7 w3l_mail_left">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d701.1058038752069!2d106.97125415455571!3d-6.256703150608522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698db27a0afa9f%3A0xec19e1dddbf5daf0!2sAlfamidi%20Nusa%20Indah!5e0!3m2!1sid!2sid!4v1589347478381!5m2!1sid!2sid" width="750" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-md-5 w3l_mail_right">
        <h3>Contact Info</h3>
        <ul>
            <li><span><i class="fa fa-home" aria-hidden="true"></i>Address<label>:</label></span> 1234k Avenue, New York City.</li>
            <li><span><i class="fa fa-phone" aria-hidden="true"></i>Phone<label>:</label></span> (+012) 345 6432</li>
            <li><span><i class="fa fa-fax" aria-hidden="true"></i>Fax<label>:</label></span> +82-21-1218</li>
            <li><span><i class="fa fa-envelope" aria-hidden="true"></i>Email<label>:</label></span> <a href="mailto:info@example.com">info@example.com</a></li>

        </ul>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="banner-bottom">
    <div class="container">
        <h3 class="wthree_head">get in touch with us</h3>
            <p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
        <div class="agileinfo_mail_grids">
            <form action="#" method="post">
                <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-13">
                        <span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
                    </label>
                </span>
                <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-14">
                        <span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
                    </label>
                </span>
                <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-15">
                        <span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
                    </label>
                </span>
                <textarea name="Message" placeholder="Your comment here..." required=""></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<!-- //mail -->
<!-- map -->
@push('scripts')
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.neighborhood","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"on"},{"weight":"1.10"}]},{"featureType":"poi.government","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#91bde7"},{"visibility":"on"}]}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>
<!-- //map -->
<script src="js/classie.js"></script>
	<script>
		(function() {
			// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
			if (!String.prototype.trim) {
				(function() {
					// Make sure we trim BOM and NBSP
					var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
					String.prototype.trim = function() {
						return this.replace(rtrim, '');
					};
				})();
			}

			[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
				// in case the input is already filled..
				if( inputEl.value.trim() !== '' ) {
					classie.add( inputEl.parentNode, 'input--filled' );
				}

				// events:
				inputEl.addEventListener( 'focus', onInputFocus );
				inputEl.addEventListener( 'blur', onInputBlur );
			} );

			function onInputFocus( ev ) {
				classie.add( ev.target.parentNode, 'input--filled' );
			}

			function onInputBlur( ev ) {
				if( ev.target.value.trim() === '' ) {
					classie.remove( ev.target.parentNode, 'input--filled' );
				}
			}
		})();
    </script>
@endpush
@endsection()

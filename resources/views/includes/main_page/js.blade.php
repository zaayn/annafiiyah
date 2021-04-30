<!-- jQuery -->
<script src="main_asset/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="main_asset/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="main_asset/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="main_asset/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="main_asset/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="main_asset/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="main_asset/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="main_asset/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="main_asset/js/jquery.magnific-popup.min.js"></script>
<script src="main_asset/js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="main_asset/js/simplyCountdown.js"></script>
<!-- Main -->
<script src="main_asset/js/main.js"></script>
<script>
var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

// default example
simplyCountdown('.simply-countdown-one', {
    year: d.getFullYear(),
    month: d.getMonth() + 1,
    day: d.getDate()
});

//jQuery example
$('#simply-countdown-losange').simplyCountdown({
    year: d.getFullYear(),
    month: d.getMonth() + 1,
    day: d.getDate(),
    enableUtc: false
});
</script>
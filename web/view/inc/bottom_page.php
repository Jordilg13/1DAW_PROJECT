<!-- BOTTOM PAGE -->


<!-- Js files -->
	<!-- JavaScript -->
	<!-- <script src="js/jquery-2.2.3.min.js"></script> -->
	<!-- Default-JavaScript-File -->
	<script src="view/js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<link rel="stylesheet" href="view/css/material.min.css" type="text/css" media="all">
	<!-- navigation -->
	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown smooth -->
	<!-- fixed nav -->
	<script>
		$(window).scroll(function () {
			if ($(document).scrollTop() > 50) {
				$('nav').addClass('shrink');
			} else {
				$('nav').removeClass('shrink');
			}
		});
	</script>
	<!-- //fixed nav -->
	<!-- //navigation -->

	<!--banner-slider-->
	<script src="view/js/JiSlider.js"></script>
	<!-- <script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 3,
				reverse: true
			}).addClass('ff')
		})
	</script> -->
	<!-- //banner-slider -->
	<script id="api_call" src="http://svcs.ebay.com/services/search/FindingService/v1?OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&SECURITY-APPNAME=<?echo _EBAY_API_KEY_ ?>&GLOBAL-ID=EBAY-US&RESPONSE-DATA-FORMAT=JSON&callback=_cb_findItemsByKeywords&REST-PAYLOAD&keywords=computer&paginationInput.entriesPerPage=30"></script>
	<!-- id: 112976185186 -->

	<!-- single item -->
	<!-- http://open.api.ebay.com/shopping?callname=GetSingleItem&responseencoding=XML&appid=jordillo-1daw2tri-PRD-0a6d8bb94-3b8a58d7&siteid=0&version=967&ItemID=112976185186 -->
	<!-- carousel(for feedback) -->
	<script src="view/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<link rel="stylesheet" href="view/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="view/css/owl.carousel.css" type="text/css" media="screen" property="" />
	<!-- //carousel(for feedback) -->

	<!-- flexisel(for filter) -->
	<script src="view/js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<!-- //flexisel(for filter) -->

	<!-- smooth scrolling -->
	<script src="view/js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="view/js/move-top.js"></script>
	<!-- easing -->
	<script src="view/js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="view/js/outdoor.js"></script>

	<!-- <script src="view/js/bootstrap.js"></script> -->
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->


</body>

</html>
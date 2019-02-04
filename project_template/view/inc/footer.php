<div id="footer">
<hr class="hr_footer"/>
	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids py-sm-4 py-3">
			<div class="container py-xl-5 py-sm-3">
				<div class="row">
					<div class="col-lg-3 col-sm-6 w3l-footer">
						<ul class="list-unstyled">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li class="mt-2">
								<a href="about.html" class="">About Us</a>
							</li>
							<li class="mt-2">
								<a href="#services" class="scroll">Services</a>
							</li>
							<li class="mt-2">
								<a href="gallery.html" class="">Gallery</a>
							</li>
							<li class="mt-2">
								<a href="contact.html" class="">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer mt-sm-0 mt-2">
						<ul class="list-unstyled">
							<li>
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mt-2">
								<a href="#feedback" class="scroll">Testimonials</a>
							</li>
							<li class="mt-2">
								<a href="single.html" class="">Some More</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer footer-social-agile mt-lg-0 mt-4">
						<h1 class="footer-head-w3ls mb-4">Connect with us</h1>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-dribbble"></i>
								</a>
							</li>
							<li class="ml-1">
								<a href="#">
									<i class="fab fa-vk"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer payment-w3lsmk  mt-lg-0 mt-4">
						<h2 class="footer-head-w3ls mb-4">Payment Options</h2>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fab fa-cc-amex"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-discover"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-cc-jcb"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-visa"></i>
								</a>
							</li>
							<li class="">
								<a href="#">
									<i class="fab fa-cc-paypal"></i>
								</a>
							</li>
							<li class="mx-1">
								<a href="#">
									<i class="fab fa-cc-stripe"></i>
								</a>
							</li>
							<li class="">
								<a href="#">
									<i class="fab fa-cc-visa"></i>
								</a>
							</li>
							<li class="ml-1">
								<a href="#">
									<i class="fab fa-cc-mastercard"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
  <p data-tr="Change language:"></p>
	<select name="state" id="state" class="form-control">
        <option value="en" data-tr="English">English</option>
        <option value="es" data-tr="Spanish">Spanish</option>
        <option value="va" data-tr="Valencian">Valencian</option>
      </select>
</div>

<!-- Js files -->
		<!-- JavaScript -->
		<script src="view/js/jquery-2.2.3.min.js"></script>
		<!-- Default-JavaScript-File -->
		<script src="view/js/bootstrap.js"></script>
		<!-- Necessary-JavaScript-File-For-Bootstrap -->

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
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({
					color: '#fff',
					start: 3,
					reverse: true
				}).addClass('ff')
			})
		</script>
		<!-- //banner-slider -->

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
		<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
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

		<script src="view/js/bootstrap.js"></script>
		<!-- Necessary-JavaScript-File-For-Bootstrap -->

		<!-- //Js files -->
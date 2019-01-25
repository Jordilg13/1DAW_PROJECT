<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WebDesign</title>
	<link href="view/css/style7.3.css" rel="stylesheet" type="text/css" />	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://jqwidgets.com/public/jqwidgets/jqx-all.js" /> -->
	<!-- <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" /> -->
	
	<!-- dataTables -->
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" /> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!-- dataTables -->
	<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
	
	<!-- <link rel="stylesheet" href="https://jqwidgets.com/public/jqwidgets/styles/jqx.base.css" /> -->
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
	<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script type="text/javascript" src="module/home/model/num_products.js"></script>
	<script type="text/javascript" src="view/js/lang.js"></script>
	


	<!-- jqwidgets -->
	<link rel="stylesheet" href="view/js/jqwidgets/jqwidgets/styles/jqx.metro.css" type="text/css" />
	<link rel="stylesheet" href="view/js/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
	<script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxdatatable.js"></script> 
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="view/js/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="view/js/jqwidgets/scripts/demos.js"></script>
	<script type="text/javascript" src="module/likes/model/likes.js"></script>

	<!-- Template header -->
	<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--// Meta tag Keywords -->

		<!-- Custom-Files -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Bootstrap-Core-CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!-- Style-CSS -->
		<link rel="stylesheet" href="css/fontawesome-all.css">
		<!-- Font-Awesome-Icons-CSS -->
		<!-- //Custom-Files -->

		<!-- Web-Fonts -->
		<link href="//fonts.googleapis.com/css?family=Archivo+Black&amp;subset=latin-ext" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<!-- //Web-Fonts -->

		<!-- Js files -->
		<!-- JavaScript -->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- Default-JavaScript-File -->
		<script src="js/bootstrap.js"></script>
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
		<script src="js/JiSlider.js"></script>
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
		<script src="js/owl.carousel.js"></script>
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
		<script src="js/jquery.flexisel.js"></script>
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
		<script src="js/SmoothScroll.min.js"></script>
		<!-- move-top -->
		<script src="js/move-top.js"></script>
		<!-- easing -->
		<script src="js/easing.js"></script>
		<!--  necessary snippets for few javascript files -->
		<script src="js/outdoor.js"></script>

		<script src="js/bootstrap.js"></script>
		<!-- Necessary-JavaScript-File-For-Bootstrap -->

		<!-- //Js files -->
	<!-- //Template header -->
	

<!-- TODO: organitzar imports -->
</head>
<body>
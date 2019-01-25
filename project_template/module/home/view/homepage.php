<h1>Products</h1>
Number of products:
<select name="num_products" id="num_products" onchange="num_products(this);">
    <?php
    if (!isset($_GET['num'])) {
        echo ("<option value='4'>4</option>");
        echo ("<option value='6'>6</option>");
        echo ("<option value='8'>8</option>");
    } elseif ($_GET['num'] == 6) {
        echo ("<option value='4'>4</option>");
        echo ("<option value='6' selected>6</option>");
        echo ("<option value='8'>8</option>");
    } elseif ($_GET['num'] == 8) {
        echo ("<option value='4'>4</option>");
        echo ("<option value='6'>6</option>");
        echo ("<option value='8' selected>8</option>");
    }
    ?>
</select>

<!-- <div id="home_products"> -->
    <!-- <table id="home_table" align="center"> -->
    <!-- <tr> -->

    
    <div class="container">
        <div class="row">
            
        
            <?php
            $images = array(
                'computer' => "computer.jpg",
                'headp' => "headphones.jpg",
                'tab' => "tablet.png",
                'tab2' => "tablet2.jpg",
            );
            //pretty home product(copypaste)
            $template_prod = '
            <div class="col-md-3 col-sm-6">
                            <div class="product-grid6">
                                <div class="product-image6">
                                    <a href="index.php?page=controller_products&op=read&id=%s">
                                        <img class="pic-1" src="view/img/products/%s">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">%s</a></h3>
                                    <div class="price">%d€
                                        <span>%d€</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="%s" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                </div></div>';
            if ($rt->num_rows === 0) {
                    // echo '<tr>';
                echo '<td align="center"  colspan="3">NEW PRODUCTS SOON!</td>';
                    // echo '</tr>';
            } else {
                $i = 0;
                foreach ($rt as $row) {
                    $i++;
                    echo ('<td>');
                    echo sprintf($template_prod, $row['product_code'], $images[array_rand($images)], $row['product_name'], $row['price'], $row['price'] + 30, "");
                    echo('</td>');
                    if ($i % 2 == 0) {
                        echo ("</div><br>");
                        echo ("<div>");
                        echo ( "<div class='container'>");
                        echo ( "<div class='row'>");
                    }
                }
            }
            ?>
        </div></div>
    <!-- </tr> -->
    <!-- </table> -->

	<!-- header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="index.html">
				<img src="images/logo4.png" class="logo img-fluid" alt="">Outdoor
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
				<ul class="navbar-nav mx-xl-auto">
					<li>
						<a class="nav-link text-uppercase active" href="index.html">Home</a>
					</li>
					<li>
						<a class="nav-link text-uppercase" href="about.html">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
						    aria-expanded="false">Pages
							<i class="fas fa-caret-down"></i>
						</a>
						<div class="dropdown-menu second mt-2" style="display: none;">
							<a class="dropdown-item scroll" href="#services">Services</a>
							<a class="dropdown-item" href="faqs.html">Faqs</a>

							<div class="dropdown-divider"></div>
							<a class="dropdown-item scroll" href="#feedback">Testimonials</a>
							<a class="dropdown-item" href="gallery.html">Gallery</a>
							<a class="dropdown-item" href="single.html">Some More</a>
						</div>
					</li>
					<li>
						<a class="nav-link text-uppercase" href="contact.html">Contact Us</a>
					</li>
				</ul>
				<div class="top-info text-lg-right text-center mt-lg-0 mt-3">
					<ul class="list-unstyled">
						<li class="text-white mr-xl-4 mr-2 ml-xl-0 ml-lg-5">+ 12345678099</li>
						<li class="number-phone">
							<a class="request text-uppercase font-weight-bold text-white" href="#">Have any Quastions?</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- //header -->

	<!-- banner slider-->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">
						<div class="bs-slider-overlay">
							<div class="container">
								<!-- Slide Text Layer -->
								<div class="w3l-slide-text">
									<p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p>
									<h3 data-animation="animated zoomInRight">Enjoy the benefits of outdoor construction</h3>
									<a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="bs-slider-overlay">
							<div class="container">
								<!-- Slide Text Layer -->
								<div class="w3l-slide-text">
									<p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p>
									<h3 data-animation="animated zoomInRight">Get the best in architecture and design</h3>
									<a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="bs-slider-overlay">
							<div class="container">
								<!-- Slide Text Layer -->
								<div class="w3l-slide-text">
									<p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p>
									<h3 data-animation="animated zoomInRight">Enjoy the benefits of outdoor construction</h3>
									<a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top3">
						<div class="bs-slider-overlay">
							<div class="container">
								<!-- Slide Text Layer -->
								<div class="w3l-slide-text">
									<p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p>
									<h3 data-animation="animated zoomInRight">Get the best in architecture and design</h3>
									<a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top4">
						<div class="bs-slider-overlay">
							<div class="container">
								<!-- Slide Text Layer -->
								<div class="w3l-slide-text">
									<p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p>
									<h3 data-animation="animated zoomInRight">Enjoy the benefits of outdoor construction</h3>
									<a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner slider -->

	<!-- banner bottom -->
	<!-- <div class="middle-agile-2 py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="d-flex t-in">
				<div class="col-lg-5 text-info-sec p-0">
					<img src="images/b2.jpg" alt=" " class="img-fluid" />
				</div>
				<div class="col-lg-7 text-info-sec bg-light">
					<h5 class="what-title text-dark my-3">Heading Her2e</h5>
					<p class="whats-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
						incididunt ut labore</p>
					<p class="whats-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt
						ut labore.Lorem ipsum dolor
						sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore</p>
					<a href="about.html" class="btn button-style-wthree mt-sm-5 mt-4">Read More</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //banner bottom -->

	<!-- services -->
	<div class="services text-center pb-5" id="services">
		<div class="container pb-xl-5 pb-lg-3">
			<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Our Services</h3>
			<div class="row box2">
				<div class="col-md-3 col-6 s-1">
					<a href="services.html">
						<div class="view view-fifth">
							<i class="fas fa-paint-brush"></i>
							<div class="mask">
								<h4>Comfort Design</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-6 s-1">
					<a href="services.html">
						<div class="view view-fifth">
							<i class="fas fa-home"></i>
							<div class="mask">
								<h4>Trend Design</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-6 s-1 mt-md-0 mt-4">
					<a href="services.html">
						<div class="view view-fifth">
							<i class="fab fa-schlix"></i>
							<div class="mask">
								<h4>Latest Styles</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-6 s-1 mt-md-0 mt-4">
					<a href="services.html">
						<div class="view view-fifth">
							<i class="fas fa-wrench"></i>
							<div class="mask">
								<h4>Unique Models</h4>
							</div>
						</div>
					</a>
				</div>
			</div>
			<a href="services.html" class="btn button-style-wthree mt-sm-5 mt-4 mb-4">View More</a>
		</div>
	</div>
	<!-- //services -->

	<!-- middle section -->
	<div class="middle-w3l text-center py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-4 mb-3 mt-4">
				It’s pleasant to be at home!</h3>
			<p class="text-white mx-auto">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
				laudantium, totam rem aperiam Sed
				ut perspiciatis unde omnis iste natus error sit.</p>
			<a href="about.html" class="btn button-style-wthree mt-sm-5 mt-4 mb-4">Read More</a>
		</div>
	</div>
	<!-- //middle section -->

	<!-- middle section two -->
	<!-- <div class="middle-agile-2 py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="d-flex t-in">
				<div class="col-lg-5 text-info-sec p-0">
					<img src="images/b1.jpg" alt=" " class="img-fluid" />
				</div>
				<div class="col-lg-7 text-info-sec bg-light">
					<h5 class="what-title text-dark my-3">Heading Here</h5>
					<p class="whats-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
						incididunt ut labore</p>
					<p class="whats-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt
						ut labore.Lorem ipsum dolor
						sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore</p>
					<a href="about.html" class="btn button-style-wthree mt-sm-5 mt-4">Read More</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //middle section two -->

	<!-- feedback -->
	<!-- <section class="news py-5" id="feedback">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-5 mb-4">Recent FeedBack</h3>
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te1.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te3.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Olivia Ruth</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te2.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Blake Joe</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te1.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te3.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Olivia Ruth</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te2.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Blake Joe</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te1.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te3.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Olivia Ruth</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedback-info bg-white py-5 px-4">
						<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="images/te2.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Blake Joe</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- //feedback -->

	<!-- subscribe -->
	<!-- <div class="subscribe-info-w3l text-center py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-4 mb-3">
				Subscribe & Save</h3>
			<p class="mb-md-5 mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
				laudantium, totam rem aperiam Sed
				ut perspiciatis unde omnis iste natus error sit.</p>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Submit">
			</form>
		</div>
	</div> -->
	<!-- //subscribe -->

	<!-- flicker -->
	<!-- <div class="flicker">
		<ul id="flexiselDemo1">
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g1.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g2.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g3.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g8.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g5.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g6.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g7.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
			<li>
				<div class="flicker_grid-agile">
					<img src="images/g4.jpg" alt=" " class="img-fluid" />
				</div>
			</li>
		</ul>
	</div> -->
	<!-- //flicker -->

	

	<!-- copyright -->
	<!-- <div class="copy-right-w3ls py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 w3ls-left-copy text-lg-left text-center">
					<p class="copy-right-grids text-white">© 2018 Outdoor. All Rights Reserved | Design by
						<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
					</p>
				</div>
				<div class="col-lg-4 w3ls-left-copy text-lg-right text-center">
					<p class="text-white">
						<i class="fas fa-phone mr-2"></i> 1234567890</p>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //copyright -->

    


<!-- </div> -->
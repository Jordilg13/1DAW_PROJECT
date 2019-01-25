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

	<!-- feedback -->
	<section class="news py-5" id="feedback">
		<div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-5 mb-4">Popular products</h3>
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
			<div class="owl-carousel owl-theme">
            <?php
            $images = array(
                'computer' => "computer.jpg",
                'headp' => "headphones.jpg",
                'tab' => "tablet.png",
                'tab2' => "tablet2.jpg",
            );
            //pretty home product(copypaste)
            $template_prod = '<div class="col-md-3 col-6 s-1">
            <a href="services.html">
                <div class="view view-fifth">
                    <i class="fas fa-paint-brush"></i>
                    <div class="mask">
                        <h4>Comfort Design</h4>
                    </div>
                </div>
            </a>
        </div>';
            // $template_prod ='<div class="item">
			// 		<div class="feedback-info bg-white py-5 px-4">
			// 			<h4 class="mb-2">%s
			// 			</h4>
			// 			<p>%s</p>
			// 			<div class="feedback-grids mt-4">
			// 				<div class="feedback-img">
			// 					<img src="view/img/products/%s" class="img-fluid" alt="" />
			// 				</div>
			// 				<div class="feedback-img-info">
			// 					<h5>%s</h5>
			// 				</div>
			// 				<div class="clearfix"> </div>
			// 			</div>
			// 		</div>
            //     </div>';
            if ($rt->num_rows === 0) {
                echo '<td align="center"  colspan="3">NEW PRODUCTS SOON!</td>';
            } else {
                foreach ($rt as $row) {
                    // echo sprintf($template_prod, $row['product_code'], $row['product_name'], $images[array_rand($images)], $row['price']);
                    echo sprintf($template_prod, $images[array_rand($images)],$images[array_rand($images)]);
                }
            }
    ?>

                
				<!-- <div class="item">
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
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //feedback -->

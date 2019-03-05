
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
									<!-- <p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p> -->
									<h3 data-animation="animated zoomInRight">Enjoy the benefits of outdoor construction</h3>
									<!-- <a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a> -->
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
									<!-- <p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p> -->
									<h3 data-animation="animated zoomInRight">Get the best in architecture and design</h3>
									<!-- <a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a> -->
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
									<!-- <p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p> -->
									<h3 data-animation="animated zoomInRight">Enjoy the benefits of outdoor construction</h3>
									<!-- <a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a> -->
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
									<!-- <p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p> -->
									<h3 data-animation="animated zoomInRight">Get the best in architecture and design</h3>
									<!-- <a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a> -->
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
									<!-- <p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p> -->
									<h3 data-animation="animated zoomInRight">Enjoy the benefits of outdoor construction</h3>
									<!-- <a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
										Our Services</a> -->
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
	<!-- search bar -->
	<form class="form-inline ml-auto search-bar-products">
		<div class="md-form my-0">
			<!-- brand input -->
			<input class="form-control" id="brand" type="text" autocomplete="off" placeholder="Brand" aria-label="Search">
			<div class="dropdown">
				<div id="myDropdown1-brand" class="dropdown-content">

				</div>
			</div>
		</div>
		<div class="md-form my-0">
			<!-- name input -->
			<input class="form-control" id="product_name" type="text" autocomplete="off" placeholder="Product name" aria-label="Search">
			<div class="dropdown">
				<div id="myDropdown1-product_name" class="dropdown-content">

				</div>
			</div>
		</div>
		<div class="md-form my-0">
			<!-- date input -->
			<input class="form-control" id="available_until" type="text" autocomplete="off" placeholder="Available until" aria-label="Search">
			<div class="dropdown">
				<div id="myDropdown1-available_until" class="dropdown-content">

				</div>
			</div>
		</div>
		<a class="btn btn-default" id="submit_button_searcher_home">Search</a>
	</form>

	<div class="container py-xl-5 py-lg-3">
		<h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-5 mb-4">Popular products</h3>
		Number of products:
		<!-- TODO: change att: "onchange" to js->php(jquery) -->
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

<div class="row box2">

	
		
		<?php
		// $images = array(
		// 	'computer' => "computer.jpg",
		// 	'headp' => "headphones.jpg",
		// 	'tab' => "tablet.png",
		// 	'tab2' => "tablet2.jpg",
		// );
		//pretty home product(copypaste)
		$template_prod = "
	<div class='col-md-3 col-6 s-1'>
		<a>
			<div class='view view-fifth'>
				<i class='fas fa-home'></i>
				<div class='mask'>
				<h4 id='individual_card' name='%s'>%s    %s€<p id='%s' class='like'>❤</p></h4>
				</div>
			</div>
		</a>
	</div>";
	// TODO: add modal to home products(onclick)
		if ($rt->num_rows === 0) {
			echo '<td align="center"  colspan="3">NEW PRODUCTS SOON!</td>';
		} else {
			$i = 0;
			foreach ($rt as $row) {
				$i++;
				// $row['product_name'].'&nbsp;&nbsp;' -> white spaces added to avoid css mistakes in products
				// names with less than 3 chars
				// print_r($row);
				echo sprintf($template_prod, $row['product_code'], $row['product_name'].'&nbsp;&nbsp;', $row['price'],$row['product_code']);
				// echo sprintf($template_prod, $images[array_rand($images)],$images[array_rand($images)]);
				if ($i%4 == 0) {
					echo("</div>");
					echo("<br>");
					echo("<div class='row box2'>");
				}
			}
		}
?>
			</div>
		</div>
	</div>


	<div class="col-12">
  <div class="panel panel-default">
      <div class="panel-head">
          <div class="panel-title">Related Products</div>
      </div>
      <div class="panel-wrapper">
          <div class="panel-body">
              <div class="row">
                  <div class="col-12 related-product">
                      <div class="owl-carousel owl-theme multi-item-slider" id="api_products">
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</section>
<!-- //feedback -->

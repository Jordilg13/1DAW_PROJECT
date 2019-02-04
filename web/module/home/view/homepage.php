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
		<button class="btn btn-outline-red btn-md my-0 ml-sm-2" id="submit_button_searcher">Search</button>
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
		$images = array(
			'computer' => "computer.jpg",
			'headp' => "headphones.jpg",
			'tab' => "tablet.png",
			'tab2' => "tablet2.jpg",
		);
		//pretty home product(copypaste)
		$template_prod = "
	<div class='col-md-3 col-6 s-1'>
		<a href='services.html'>
			<div class='view view-fifth'>
				<i class='fas fa-home'></i>
				<div class='mask'>
					<h4>%s    %s€</h4>
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
				echo sprintf($template_prod, $row['product_name'].'&nbsp;&nbsp;', $row['price'], $images[array_rand($images)], $row['price']);
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
</section>
<!-- //feedback -->

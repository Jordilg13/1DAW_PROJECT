<section class="news2 py-5" id="feedback">
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
		<a class="btn btn-default" id="submit_button_searcher">Search</a>
		<!-- <a class="btn btn-default" href="index.php?page=shop_controller&op=list" id="submit_button_searcher">Search</a> -->
    </form>
    <div class="container py-xl-5 py-lg-3">
		<h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-5 mb-4">Filtered products</h3>
		<div class="row box2" id="searched_products">

		</div>
	</div>
</section>
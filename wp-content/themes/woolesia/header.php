<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
		<header class="header">
			<!--Header Top-->
			<div class="header-top py-1">
				<div class="container">
					<div class="row">
						<div class="col-6 col-sm-4">
							<div class="header-top-phone">
								<i class="fa-solid fa-mobile-screen"></i>
								<a href="tel:+71234456778" class="ms-2">+7 123-445-67-78</a>
							</div>
						</div>

						<div class="col-sm-4 d-none d-sm-block">
							<ul class="social-icons">
								<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-instagram"></i></i></a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-4">
							<div class="dropdown_wrapper">
								<div class="btn-group me-2">
									<div class="dropdown">
										<button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										  Account
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="#">Sign In</a></li>
										  <li><a class="dropdown-item" href="#">Sign Up</a></li>
										</ul>
									</div>
								</div>

								<div class="btn-group">
									<div class="dropdown">
										<button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											EN
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">RU</a></li>
											<li><a class="dropdown-item" href="#">DE</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Header Middle-->
			<div class="header-middle py-4">
				<div class="container">
					<div class="row align-items-center">
						<!--Header logo-->
						<div class="col-sm-6">
							<a href="index.html" class="header-logo h3">E-Shop</a>
						</div>

						<!-- Search form-->
						<div class="col-sm-6 mt-2 mt-md-0">
							<form action="">
								<div class="input-group">
									<input type="text" class="form-control" name="search" placeholder="Searching..." aria-label="Searching..." aria-describedby="button-search">
									<button class="btn btn-outline-warning" type="submit" id="button-search">
										<i class="fa-solid fa-magnifying-glass"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--Header Bottom-->
			<!--offcanvas cart-->
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<!--Товары в корзине-->
				<div class="table-responsive">
					<table class="table offcanvasCart-table">
						<tbody>
							<tr>
								<td class="product-img-td"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/1.jpg"></a></td>
								<td><a href="#">Product 6 Lorem ipsum dolor sit amet, consectetur adipisicing.</a></td>
								<td>$65</td>
								<td>&times;1</td>
								<td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
							</tr>

							<tr>
								<td class="product-img-td"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/2.jpg"></a></td>
								<td><a href="#">Product 2</a></td>
								<td>$80</td>
								<td>&times;2</td>
								<td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
							</tr>

							<tr>
								<td class="product-img-td"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/3.jpg"></a></td>
								<td><a href="#">Product 3</a></td>
								<td>$100</td>
								<td>&times;1</td>
								<td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4" class="text-end">Total:</td>
								<td>$325</td>
							</tr>
						</tfoot>
					</table>
				</div>

				<!--Кнопки в offcanvas cart-->
				<div class="text-end mt-3">
					<a href="#" class="btn btn-outline-warning">Cart</a>
					<a href="#" class="btn btn-outline-secondary">Checkout</a>
				</div>

				<!--Дополнительные ссылки в корзине в dropdown-->
				<div class="dropdown mt-3">
				<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
					Dropdown button
				</button>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item closecart" href="#footer" data-href="footer">Footer</a></li>
					<li><a class="dropdown-item closecart" href="#about" data-href="about">About</a></li>
					<li><a class="dropdown-item closecart" href="#map" data-href="map">Map</a></li>
				</ul>
				</div>
			</div>
		</div>

		<div class="header-bottom sticky-top" id="header-nav">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
				<div class="container">
					<a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="offcanvas offcanvas-start text-bg-dark" id="offcanvasNavbar" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Каталог</h5>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>

						<div class="offcanvas-body">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contacts</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Payment</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Delivery</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
									Catalog
									</a>
									<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end animate slideIn">
									<li><a class="dropdown-item" href="category.html">Shoes</a></li>
									<li><a class="dropdown-item" href="category.html">Jeans</a></li>
									<li class="nav-item dropend">
										<a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Sportswear</a>
										<ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
											<li>
												<a class="dropdown-item" href="category.html">Men's Sportswear</a>
											</li>
											<li>
												<a class="dropdown-item" href="category.html">Women's Sportswear</a>
											</li>
											<li>
												<a class="dropdown-item" href="category.html">Baby's Sportswear</a>
											</li>
										</ul>
									</li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled">Disabled</a>
								</li>
							</ul>
						</div>
					</div>

					<!--Cart-->
					<div>
						<a href="#" class="btn p-1">
							<i class="fa-solid fa-heart"></i>
							<span class="badge rounded-pill text-bg-warning cart-badge bg-warning rounded-circle">3</span>
						</a>
	
						<!--Кнопка перехода в корзину, работает через JS 	/*Открываем offcanvas*/. Если не нужно, чтобы открывалось программно, то поставить значение "offcanvas" в data-bs-toggle="offcanvas2"-->
						<button class="btn p-1" id="cart-open" type="button" data-bs-toggle="offcanvas2" data-bs-target="#offcanvasCart" area-controls="offcanvasCart">
							<i class="fa-solid fa-cart-shopping"></i>
							<span class="badge rounded-pill text-bg-warning cart-badge bg-warning rounded-circle">5</span>
						</button>
					</div>
				</div>
			</nav>
		</div>
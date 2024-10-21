<?php get_header() ?>

		<main class="main">
			<!--Slider-->
			<div id="carousel" class="carousel slide carousel-fade" data-bs-ride="false">
				<div class="carousel-indicators">
				  <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				  <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				  <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
				  <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
				  <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
				</div>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="assets/img/slider/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					  <h2>First slide label</h2>
					  <p>Some representative placeholder content for the first slide.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="assets/img/slider/2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					  <h2>Second slide label</h2>
					  <p>Some representative placeholder content for the second slide.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="assets/img/slider/3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					  <h2>Third slide label</h2>
					  <p>Some representative placeholder content for the third slide.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="assets/img/slider/4.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					  <h2>Third slide label</h2>
					  <p>Some representative placeholder content for the fourth slide.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="assets/img/slider/5.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					  <h2>Third slide label</h2>
					  <p>Some representative placeholder content for the fifth slide.</p>
					</div>
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			</div>

			<section class="advantages">
				<div class="container">
					<div class="row mb-5">
						<div class="col-12">
							<h2 class="section-title"><span>Наши преимущества</span></h2>
						</div>
					</div>

					<div class="row gy-3 items">
						<div class="col-lg-3 col-sm-6">
							<div class="item">
								<p><i class="fas fa-shipping-fast"></i></p>
								<p>Прямые поставки от производителей брендов</p>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="item">
								<p><i class="fas fa-cubes"></i></p>
								<p>Широкий ассортимент товаров. Более 10 тыс. наименований</p>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="item">
								<p><i class="fas fa-hand-holding-usd"></i></p>
								<p>Приятные и конкурентные цены</p>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="item">
								<p><i class="fa-solid fa-user-graduate"></i></p>
								<p>Консультации от профессионалов</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="featured-products px-lg-3">
				<div class="container">
					<div class="row mb-5">
						<div class="col-12">
							<h2 class="section-title"><span>Рекомендуемые товары</span></h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
								<div class="offer-new">New</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/1.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 1 Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, repellendus!</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										<small>$70</small>
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/2.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 2 Lorem ipsum </a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor sit, amet consectetur adipisicing</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/3.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 3 Lorem ipsum dolor sit amet</a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										$100
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/4.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 4</a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										<small>$70</small>
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
								<div class="offer-new">New</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/5.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 5 Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, repellendus!</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										<small>$70</small>
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
								<div class="offer-new">New</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/6.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 6 Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
								</h4>
								<p class="product-excert"></p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										<small>$70</small>
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
								<div class="offer-new">New</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/7.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 7 Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, repellendus!</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										<small>$70</small>
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
						<div class="product-card">
							<div class="product-card-offer">
								<div class="offer-hit">Hit</div>
								<div class="offer-new">New</div>
							</div>
							<div class="product-thumb">
								<a href="product.html">
									<img src="assets/img/products/8.jpg" alt="1">
								</a>
							</div>
							<div class="product-details">
								<h4>
									<a href="product.html">Product 8 Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
								</h4>
								<p class="product-excert">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, repellendus!</p>
								<div class="product-bottom-details d-flex justify-content-between">
									<div class="product-price">
										<small>$70</small>
										$65
									</div>
									<div class="product-links">
										<a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			  <div class="container">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quod nemo excepturi nam alias ullam magni eaque eum odit, explicabo maiores, ex impedit adipisci facere enim ducimus, fugit deserunt inventore! Molestiae, beatae esse omnis voluptatem praesentium voluptatum sunt soluta doloribus id velit assumenda debitis facere a sed itaque ratione corporis!</p>
			  </div>

			<!--About-->
			<section class="about-us" id="about">
				<div class="container">
					<div class="row mb-5">
						<div class="col-12">
							<h2 class="section-title"><span>About Us</span></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quia et id, eaque numquam nemo assumenda repudiandae ab, aliquid laborum voluptas molestias aspernatur minima a iusto eius sapiente hic nostrum. Voluptate deserunt nobis blanditiis dolorem!</p>
							<p>Molestias facere explicabo magni tenetur labore architecto officia voluptas provident enim, rem aliquam non quia similique soluta quibusdam a autem dolor corporis quisquam repellat, minus, hic voluptatibus. Culpa quasi dignissimos tempora amet beatae ab optio.</p>
							<p>Atque voluptas quisquam modi dolor aliquam nisi officiis ratione ea quas enim, suscipit eaque ducimus distinctio nemo aperiam sapiente architecto consequatur perspiciatis iste facere illo facilis earum? Quis deleniti, iure delectus animi sapiente ullam illum.</p>
						</div>
					</div>
				</div>
			</section>

			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.7957253027812!2d30.336132177271!3d59.91893747490518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469631ad2ba38cef%3A0xc3bfb6d02622eb87!2sOceanarium!5e0!3m2!1sen!2sru!4v1725901602390!5m2!1sen!2sru" width="100%" height="450" style="border:0; display: block" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</main>

		<!--==========FOOTER==============-->
<?php get_footer() ?>


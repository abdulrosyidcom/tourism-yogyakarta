<!-- Home -->

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/frontend/'); ?>images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">our offers</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">
		
		<!-- Offers -->

		<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>

				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">

						<!-- Offers Item -->
						<div class="offers_item rating_4">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="jumbotron" style="background-image: url('<?= base_url('assets/img/offers/') . $offer['image']; ?>'); height: 300px; background-size: cover;">

                                    </div>
                                </div>
                            </div>
							<div class="row justify-content-center">
								<div class="col-lg-1 temp_col"></div>
								<!-- <div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<div class="offers_image_background" style="background-image:url(<?= base_url('assets/img/offers/') . $offer['image']; ?>)"></div>
										<div class="offer_name"><a href="single_listing.html"><?= $offer['title']; ?></a></div>
									</div>
								</div> -->
								<div class="col-lg-8 text-center">
									<div class="offers_content">
										<div class="offers_price">Rp. <?= $offer['price']; ?><span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text"><?= $offer['content']; ?></p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<!-- <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div> -->
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">Author</div>
												<div class="offer_reviews_subtitle"><?= $offer['author']; ?></div>
											</div>
											<!-- <div class="offer_reviews_rating text-center">8.1</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>		
	</div>
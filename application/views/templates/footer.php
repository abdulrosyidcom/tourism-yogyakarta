    <!-- Footer -->

    <footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="<?= base_url('assets/frontend/'); ?>images/logo.png" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							
							<?php foreach( $articles as $article ) : ?>

								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img src="<?= base_url('assets/img/article/') . $article['image']; ?>" alt="https://unsplash.com/@avidenov"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="<?= base_url('articles/read/') . $article['url_title']; ?>"><?= substr( $article['title'], 0, 20 ); ?></a></div>
										<div class="footer_blog_date"><?= date('d, M, Y', $article['date_created']); ?></div>
									</div>
								</div>
							
							<?php endforeach; ?>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Category</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">

								<?php foreach( $categorys as $category ) : ?>

									<li class="tag_item"><a href="<?= base_url('articles/category/') . $category['title']; ?>"><?= $category['title']; ?></a></li>

								<?php endforeach; ?>

							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Bantul Yogyakarta</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">+62 896 7566 5565</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="djogjakartawisata@gmail.com?Subject=Hello" target="_top">djogjakartawisata@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="<?= base_url(); ?>">www.pariwisata.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
							Copyright &copy; <?= date('Y') ?> All rights reserved | Pariwisata Yogyakarta <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?= base_url(); ?>" target="_blank">Pariwisata</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="<?= base_url(); ?>">home</a></li>
								<li class="footer_nav_item"><a href="<?= base_url('articles'); ?>">Articles</a></li>
								<li class="footer_nav_item"><a href="<?= base_url('contact'); ?>">Contact</a></li>
								<li class="footer_nav_item"><a href="<?= base_url('about'); ?>">About US</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
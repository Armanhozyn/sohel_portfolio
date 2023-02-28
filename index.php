<?php include "./inc/header.php"; ?>



	<!-- End About Area -->
	<!-- Start Services Area -->
	<section class="section-padding-2 section-bg">
		<div class="container">
			<!-- Section Headding -->
			<div class="row">
				<div class="col-lg-8 offset-lg-2 mb-50 text-center">
					<div class="section-headding">
						<h2>My Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet maximus est.</p>
					</div>
				</div>
			</div>
			<!-- Services Content -->
			<div class="row">
                <?php
                $i = 0;
                    $services = $db->link->query('select * from services');
                    while($service = $services->fetch_assoc()) {
                        $i++;
                ?>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-box">
						<div class="count">
							<span><?php echo $i; ?></span>
						</div>
						<div class="icon">
							<i class="<?php echo $service['image']; ?>"></i>
						</div>
						<h2><?php echo $service['title']; ?></h2>
						<p><?php echo $service['description']; ?></p>
						<a class="read_details" href="services-details.html">View Details</a>
					</div>
				</div>
                <?php  } ?>
			</div>
		</div>
	</section>
	<!-- End Services Area -->
	<!-- Start Hire Area -->
	<section class="hire-area" style="background-image: url('assets/img/hire-area.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="hire-area-content">
						<h2>Let's Work Together!</h2>
						<p>I am available for freelance projects. Hire me and get your project done.</p>
						<a class="button-1" href="contact.html">Hire Me <span></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hire Area -->
	<!-- Start Portfolio Area -->
	<section class="section-padding">
		<div class="container">
			<!-- Section Headding -->
			<div class="row">
				<div class="col-lg-8 offset-lg-2 mb-50 text-center">
					<div class="section-headding">
						<h2>My Latest Portfolio</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet maximus est.</p>
					</div>
				</div>
			</div>
			<!-- Category -->
			<div class="row">
				<div class="col-lg-12 mb-40">
					<div class="portfolio-category-list">
						<ul>
							<li data-filter="all">All</li>
							<li data-filter=".design">Design</li>
							<li data-filter=".development">Development</li>
							<li data-filter=".app">App</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Portfolio -->
			<div class="row portfolio-full portF">
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix design app">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/2.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/2.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix app development">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/1.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/1.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix development">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/3.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/3.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix design app">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/4.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/4.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix design development">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/5.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/5.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix design app development">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/6.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/6.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-lg-12 text-center">
					<a class="button-1 button-round" href="portfolio.html">Load More <i class="fas fa-spinner fa-spin"></i> <span></span></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Area -->
	<!-- Start Call Now Section -->
	<section class="call-now-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="call_now_content text-center">
						<h4 class="sc_subtitle text-white"><span>any question you have</span> </h4>
						<h2>+0158 852 1252</h2>
						<a class="button-1 button-radious" href="#"><i class="fas fa-phone-alt"></i> Make Call <span></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="call_now_img">
			<img src="assets/img/call.png" alt="call">
		</div>
	</section>
	<!-- End Call Now Section -->
	<!-- Start Testimonial Area -->
	<section class="section-padding section-bg">
		<div class="container">
			<!-- Section Headding -->
			<div class="row">
				<div class="col-lg-8 offset-lg-2 mb-50 text-center">
					<div class="section-headding">
						<h2>My Testimonial</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet maximus est.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testimonial-full owl-carousel">
					<!-- single -->
					<div class="testimonial-single">
						<div class="testimonial-single-header">
							<div class="thumbnail">
								<img src="assets/img/tes1.jpg" alt="testimonial">
							</div>
							<div class="testimonial-title">
								<h4>Rachel Adams</h4>
								<p>Regular Clients</p>
								<div class="tes_review">
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
								</div>
							</div>
						</div>
						<div class="testimonial-single-footer">
							<p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
						</div>
					</div>
					<!-- single -->
					<div class="testimonial-single">
						<div class="testimonial-single-header">
							<div class="thumbnail">
								<img src="assets/img/tes2.jpg" alt="testimonial">
							</div>
							<div class="testimonial-title">
								<h4>Rachel Adams</h4>
								<p>Regular Clients</p>
								<div class="tes_review">
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
								</div>
							</div>
						</div>
						<div class="testimonial-single-footer">
							<p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
						</div>
					</div>
					<!-- single -->
					<div class="testimonial-single">
						<div class="testimonial-single-header">
							<div class="thumbnail">
								<img src="assets/img/tes1.jpg" alt="testimonial">
							</div>
							<div class="testimonial-title">
								<h4>Rachel Adams</h4>
								<p>Regular Clients</p>
								<div class="tes_review">
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
								</div>
							</div>
						</div>
						<div class="testimonial-single-footer">
							<p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Area -->
	<!-- Start Blog Area -->
	<section class="section-padding-2">
		<div class="container">
			<!-- Section Headding -->
			<div class="row">
				<div class="col-lg-8 offset-lg-2 mb-50 text-center">
					<div class="section-headding">
						<h2>Latest Blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet maximus est.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="blog-thumbnail">
							<a href="single.html">
								<img src="assets/img/blog/1.jpg" alt="blog">
							</a>
						</div>
						<div class="blog_author">
							<div class="blog-meta">
                            	<a href="#"><i class="fas fa-user"></i> Admin</a>
                            	<a href="#"><i class="fas fa-tags"></i> Technology</a>
                            </div>
							<div class="pb-right">
								<h3>20</h3>
								<span>Oct</span>
							</div>
						</div>
						<div class="blog-content">
							<h3><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
							<a class="button-1 read-details" href="single.html">Read Details <span></span></a>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="blog-thumbnail">
							<a href="single.html">
								<img src="assets/img/blog/2.jpg" alt="blog">
							</a>
						</div>
						<div class="blog_author">
							<div class="blog-meta">
                            	<a href="#"><i class="fas fa-user"></i> Admin</a>
                            	<a href="#"><i class="fas fa-tags"></i> Technology</a>
                            </div>
							<div class="pb-right">
								<h3>20</h3>
								<span>Oct</span>
							</div>
						</div>
						<div class="blog-content">
							<h3><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
							<a class="button-1 read-details" href="single.html">Read Details <span></span></a>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="blog-thumbnail">
							<a href="single.html">
								<img src="assets/img/blog/3.jpg" alt="blog">
							</a>
						</div>
						<div class="blog_author">
							<div class="blog-meta">
                            	<a href="#"><i class="fas fa-user"></i> Admin</a>
                            	<a href="#"><i class="fas fa-tags"></i> Technology</a>
                            </div>
							<div class="pb-right">
								<h3>20</h3>
								<span>Oct</span>
							</div>
						</div>
						<div class="blog-content">
							<h3><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
							<a class="button-1 read-details" href="single.html">Read Details <span></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start Blog Area -->
	<!-- Start allery Area -->
	<div class="gallery-area">
		<div class="gallery-slider owl-carousel">
			<!-- Single -->
			<div class="gallery-item">
				<img src="assets/img/portfolio/1.jpg" alt="photo">
				<div class="gallery-item-overly">
					<a data-rel="lightcase:gallery" href="assets/img/portfolio/1.jpg">+</a>
				</div>
			</div>
			<!-- Single -->
			<div class="gallery-item">
				<img src="assets/img/portfolio/2.jpg" alt="photo">
				<div class="gallery-item-overly">
					<a data-rel="lightcase:gallery" href="assets/img/portfolio/2.jpg">+</a>
				</div>
			</div>
			<!-- Single -->
			<div class="gallery-item">
				<img src="assets/img/portfolio/3.jpg" alt="photo">
				<div class="gallery-item-overly">
					<a data-rel="lightcase:gallery" href="assets/img/portfolio/3.jpg">+</a>
				</div>
			</div>
			<!-- Single -->
			<div class="gallery-item">
				<img src="assets/img/portfolio/4.jpg" alt="photo">
				<div class="gallery-item-overly">
					<a data-rel="lightcase:gallery" href="assets/img/portfolio/4.jpg">+</a>
				</div>
			</div>
			<!-- Single -->
			<div class="gallery-item">
				<img src="assets/img/portfolio/5.jpg" alt="photo">
				<div class="gallery-item-overly">
					<a data-rel="lightcase:gallery" href="assets/img/portfolio/5.jpg">+</a>
				</div>
			</div>
			<!-- Single -->
			<div class="gallery-item">
				<img src="assets/img/portfolio/6.jpg" alt="photo">
				<div class="gallery-item-overly">
					<a data-rel="lightcase:gallery" href="assets/img/portfolio/6.jpg">+</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End allery Area -->
<?php include "./inc/footer.php"; ?>


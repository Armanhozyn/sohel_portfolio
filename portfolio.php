<?php include "./inc/header.php"; ?>

<?php include "./config/config.php"; ?>
<?php include "./lib/Database.php"; ?>
<?php

    $res = new Database();
    $result = $res->link->query("select * from general")->fetch_assoc();
    var_dump($result);
?>
	<!-- Start Portfolio Area -->
	<div class="section-padding">
		<div class="container">
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
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix app development">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/7.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/7.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix design app">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/8.jpg" alt="portfolio-item">
						<div class="portfolio-overly">
							<div class="portfolio-overly-full">
								<p>Crearive Design</p>
								<ul>
									<li><a data-rel="lightcase:portfolio" href="assets/img/portfolio/8.jpg"><i class="far fa-eye"></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30 mix design development">
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
			</div>
			<div class="row mt-10">
				<div class="col-lg-12 text-center">
					<a class="button-1 button-round" href="portfolio.html">Load More <i class="fas fa-spinner fa-spin"></i> <span></span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Portfolio Area -->
<?php include "./inc/footer.php"; ?>

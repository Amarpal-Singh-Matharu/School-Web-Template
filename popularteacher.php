 <!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include/header-link.php') ?>
	<title>Template - <?php echo SITE_NAME; ?></title>
</head>

<body>
	<!-- start root -->
	<div id="root">
		<?php include('include/header.php') ?>

		<main id="main">
			<!-- inner page about section end -->
            <section class="inner_page section-padding">
                <div class="container">
                    <div class="inner_page_content">
                        <div class="inner_page_content_text"><h2>Teachers</h2></div>
                        <div class="inner_page_content_mini_text">
                            <ul class="d-flex p-0">
                                <li><a href="index.php">Home </a>/</li>
                                <li><a href="#">Pages </a>/</li>
                                <li>About Us </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- inner page about section end -->


            <!-- popular teacher section start -->
		<section class="our_mentor ">
			<div class="container">
				<div class="row">
					<!-- section title section start -->
					<div class="section_title text-center mt-5 wow fadeInUp animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
			        	<div class="section_title_text text-left mb-4"><h2>Become A Teacher</h2></div>
			        	<div class="section_title_mini_text"><p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem <br>  kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo</p></div>
			        </div>
			         <!-- section title section end -->

					 <!-- col start -->
					 <div class="col-md-4">
						<div class="our_mentor_card mt-5">
							<div class="our_mentor_card_image"><img src="<?php echo BASE_URL; ?>/images/team-1.jpg" alt=""></div>
							<div class="our_mentor_card_content">
								<div class="our_mentor_card_content_text"><h3>Full Name</h3></div>
								<div class="our_mentor_card_content_mini_text"><h4>Designation</h4></div>
								<div class="our_mentor_card_content_icon d-flex">
								    <i class="fa fa-facebook-f"></i>
								    <i class="fa fa-twitter"></i>
								    <i class="fa fa-instagram"></i>
								</div>
							</div>
						</div>
					 </div>
					 <!-- col end -->					

					 <!-- col start -->
					 <div class="col-md-4">
						<div class="our_mentor_card mt-5">
							<div class="our_mentor_card_image"><img src="<?php echo BASE_URL; ?>/images/team-2.jpg" alt=""></div>
							<div class="our_mentor_card_content">
								<div class="our_mentor_card_content_text"><h3>Full Name</h3></div>
								<div class="our_mentor_card_content_mini_text"><h4>Designation</h4></div>
								<div class="our_mentor_card_content_icon d-flex">
								    <i class="fa fa-facebook-f"></i>
								    <i class="fa fa-twitter"></i>
								    <i class="fa fa-instagram"></i>
								</div>
							</div>
						</div>
					 </div>
					 <!-- col end -->					

					 <!-- col start -->
					 <div class="col-md-4">
						<div class="our_mentor_card mt-5">
							<div class="our_mentor_card_image"><img src="<?php echo BASE_URL; ?>/images/team-3.jpg" alt=""></div>
							<div class="our_mentor_card_content">
								<div class="our_mentor_card_content_text"><h3>Full Name</h3></div>
								<div class="our_mentor_card_content_mini_text"><h4>Designation</h4></div>
								<div class="our_mentor_card_content_icon d-flex">
								    <i class="fa fa-facebook-f"></i>
								    <i class="fa fa-twitter"></i>
								    <i class="fa fa-instagram"></i>
								</div>
							</div>
						</div>
					 </div>
					 <!-- col end -->					
				</div>
			</div>
		</section>
		<!-- popular teacher section end -->
		</main>


		<?php include('include/footer.php') ?>
	</div>
	<!-- end root -->
	<?php include('include/footer-link.php') ?>

	<script>

	</script>
</body>

</html>
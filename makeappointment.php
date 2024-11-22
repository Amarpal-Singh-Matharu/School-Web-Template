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
			<!-- classes inner page section start -->
            <section class="inner_page section-padding">
                <div class="container">
                    <div class="inner_page_content">
                        <div class="inner_page_content_text"><h2>Appointment</h2></div>
                        <div class="inner_page_content_mini_text">
                            <ul class="d-flex p-0">
                                <li><a href="index.php">Home </a>/</li>
                                <li><a href="#">Pages </a>/</li>
                                <li>Appointment </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- school classes section start -->

            <!-- main appointment section start -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<!-- col start -->
					<div class="col-md-6">
						<!-- section title section start -->
						<div class="section_title text-left  mt-5 wow fadeInUp animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
			        	    <div class="section_title_text mr-5 "><h2>Make Appointment</h2></div>
			            </div>
			            <!-- section title section end -->
						    <div class="row form_padding">
                                  <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Gaurdian Name" aria-label="First name">
                                  </div>
                                  <div class="col-md-6">
                                    <input type="mail" class="form-control" placeholder="Gaurdian Email" aria-label="Last name">
                                  </div>
								  <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Child Name" aria-label="Last name">
                                  </div>
								  <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Child Age" aria-label="Last name">
                                  </div>
								  <div class="form-floating">
                                     <textarea class="form-control py-5" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                     <label for="floatingTextarea">Message</label>
                                   </div>
								   <div class="form_button"><button><a href="#">Submit</a></button></div>
                            </div>
					</div>
					<!-- col end -->

					<!-- col start -->
					<div class="col-md-6">
						<div class="appointment_img "><img src="<?php echo BASE_URL; ?>/images/appointment.jpg" alt=""></div>
					</div>
					<!-- col end -->
				</div>
			</div>
		</section>
		<!-- main appointment section end -->
		</main>


		<?php include('include/footer.php') ?>
	</div>
	<!-- end root -->
	<?php include('include/footer-link.php') ?>

	<script>

	</script>
</body>

</html>
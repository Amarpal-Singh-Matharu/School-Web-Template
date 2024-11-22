
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
                        <div class="inner_page_content_text"><h2>Testimonial</h2></div>
                        <div class="inner_page_content_mini_text">
                            <ul class="d-flex p-0">
                                <li><a href="index.php">Home </a>/</li>
                                <li><a href="#">Pages </a>/</li>
                                <li>Testimonial </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- school classes section start -->


           <!-- the 404 error section start -->
            <section class="error mt-5">
            <div class="container">
                    <div class="row">
                        <!-- section title section start -->
			        <div class="section_title text-center wow fadeInUp animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
                        <div class="error_icon"><i class="fa fa-warning"></i></div>
                        <div class="section_error">404</div>
			        	<div class="section_title_text mb-3"><h2>Page Not Found</h2></div>
			        	<div class="section_title_mini_text"><p>We're sorry, the page you have looked for does not exist in our website! <br> Maybe go to our home page or try to use a search?</p></div>
                        <div class="error_button"><button>go back to home</button></div>
			        </div>
			        <!-- section title section end -->
                    </div>
                </div>
            </section>
            <!-- the 404 error section start -->


		</main>


		<?php include('include/footer.php') ?>
	</div>
	<!-- end root -->
	<?php include('include/footer-link.php') ?>

	<script>

	</script>
</body>

</html>            
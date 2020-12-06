<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PopularFX
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php /*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		*/ ?>

	<body id="page-top">
		<!-- Navigation-->
		<div class="navGroup">
			<a class="menu" href="javascript:void(0)">
				<div id="nav-icon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>
			<nav class="navbar navbar-expand-lg navbar-dark" id="sideNav">
				<a class="picture navbar-brand js-scroll-trigger m-0" href="#page-top">
					<!-- <span class=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg"
                    alt="mypicture" /></span> -->
					<h1 class="ml8">
						<span class="letters-container">
							<span class="letters letters-left"><span class=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="mypicture" /></span></span>
						</span>
						<span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
					</h1>
				</a>
				<div class="navbarSupportedContent" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#work">Work</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Page Content-->
		<div class="container-fluid p-0">
			<!-- About-->
			<section class="resume-section background" id="about">
				<div class="resume-section-content content-wrapper">
					<h1>
						<span class="text-wrapper">
							<span class="letters">Rajat <span class="text-primary">Gulati</span></span>
						</span>
					</h1>
					<div class="subheading mb-5">
						<h2 class="iAm">
							<span class="iAmA">I'm a </span>
							<span class="txt-rotate" data-period="2000" data-rotate='[ "UI Designer.", "Graphic Designer.",
                            "Freelancer." ]'></span>
						</h2>
					</div>
					<!-- <p class="lead quotation">
                    <span class="quotesText"><i class="fas fa-quote-left text-primary"></i>Good design is like a
                        refrigerator - when it works, no one notices, but when it
                        doesn't, it sure stinks.<i class="fas fa-quote-right text-primary"></i></span>
                    <span class="quoteAuthor mt-2">Irene Au<span class="hyphen">-</span></span>
                </p> -->
					<p class="description mb-5">I am an innovative, passionate and creative
						professional when it comes to art. A positive creative individual with a smile.</p>
					<div class="mailIconGroup">
						<div class="social-icons">
							<a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
							<a class="social-icon" href="#"><i class="fab fa-github"></i></a>
							<a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
							<a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
						</div>
						<div class="subheading">
							<a href="mailto:name@email.com">designifinity@email.com</a>
						</div>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			<!-- My Work-->
			<section class="resume-section background" id="work">
				<div class="resume-section-content content-wrapper">
					<h2 class="mb-5">Work</h2>
					<div class="workCategories">
						<div class="categoryGroup">
							<div class="category" id="uiDesign">
								<div class="categoryImage">
									<span class="close"><i class="fas fa-times-circle"></i></span>
									<a href="javascript:void(0)" class="title">UI Design</a>
									<span class="title">UI Design</span>
									<figure style="position: relative; background-image:url('./assets/work/category-thumbnail/uidesign.jpg');" alt="uidesign">
									</figure>
								</div>
								<div class="portfolioGallery" id="uiDesignPortfolio"></div>
							</div>
							<div class="category mobileActive" id="picillusion">
								<div class="categoryImage">
									<span class="close"><i class="fas fa-times-circle"></i></span>
									<a href="javascript:void(0)" class="title active">Picillusion</a>
									<span class="title">Picillusion</span>
									<figure style="position: relative; background-image:url('./assets/work/category-thumbnail/picillusion.jpg');" alt="picillusion">
									</figure>
								</div>
								<!-- <div id="instagram-feed-demo" class="instagram_feed"></div> -->
								<div class="portfolioGallery" id="picillusionPortfolio"></div>
							</div>
							<div class="category" id="logo">
								<div class="categoryImage">
									<span class="close"><i class="fas fa-times-circle"></i></span>
									<a href="javascript:void(0)" class="title">Logo</a>
									<span class="title">Logo</span>
									<figure style="position: relative; background-image:url('./assets/work/category-thumbnail/logo.jpg');" alt="logo">
									</figure>
								</div>
								<div class="portfolioGallery" id="logoPortfolio">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			<!-- Skills-->
			<section class="resume-section background" id="skills">
				<div class="resume-section-content content-wrapper">
					<h2 class="mb-5">Skills</h2>
					<div class="articleGroup">
						<article class="mr-4 mb-4">
							<div class="subheading">User Interface Design</div>
							<ul class="fa-ul mb-0 skillsList">
								<li>
									<span class="fa-li"><i class="fas fa-globe"></i></span>
									<span class="label">Web</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-mobile-alt"></i></span>
									<span class="label">Mobile</span>
								</li>
								<li>
									<span class="fa-li"><i class="fab fa-sketch"></i></span>
									<span class="label">Mockup</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-th-large"></i></span>
									<span class="label">Responsive</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-chart-pie"></i></span>
									<span class="label">Dashboard</span>
								</li>
							</ul>
						</article>
						<article class="mr-4 mb-4">
							<div class="subheading">Graphic Design</div>
							<ul class="fa-ul mb-0 skillsList">
								<li>
									<span class="fa-li"><i class="fas fa-globe"></i></span>
									<span class="label">Photoshop</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-mobile-alt"></i></span>
									<span class="label">Illustrator</span>
								</li>
								<li>
									<span class="fa-li"><i class="fab fa-sketch"></i></span>
									<span class="label">Marketing</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-th-large"></i></span>
									<span class="label">Branding</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-chart-pie"></i></span>
									<span class="label">Editing</span>
								</li>
							</ul>
						</article>
						<article class="mr-4 mb-4">
							<div class="subheading">Development</div>
							<ul class="fa-ul mb-0 skillsList">
								<li>
									<span class="fa-li"><i class="fas fa-globe"></i></span>
									<span class="label">HTML5</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-mobile-alt"></i></span>
									<span class="label">CSS3</span>
								</li>
								<li>
									<span class="fa-li"><i class="fab fa-sketch"></i></span>
									<span class="label">Bootstrap</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-th-large"></i></span>
									<span class="label">SASS</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-chart-pie"></i></span>
									<span class="label">JQuery</span>
								</li>
							</ul>
						</article>
						<article class="mr-4 mb-4">
							<div class="subheading">User Experience Design</div>
							<ul class="fa-ul mb-0 skillsList">
								<li>
									<span class="fa-li"><i class="fas fa-globe"></i></span>
									<span class="label">Prototype</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-mobile-alt"></i></span>
									<span class="label">UX Pin</span>
								</li>
								<li>
									<span class="fa-li"><i class="fab fa-sketch"></i></span>
									<span class="label">Adobe XD</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-th-large"></i></span>
									<span class="label">Sketch</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-chart-pie"></i></span>
									<span class="label">Figma</span>
								</li>
							</ul>
						</article>
						<article class="mr-4 mb-4">
							<div class="subheading">Others</div>
							<ul class="fa-ul mb-0 skillsList">
								<li>
									<span class="fa-li"><i class="fas fa-globe"></i></span>
									<span class="label">Git</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-mobile-alt"></i></span>
									<span class="label">Command Line</span>
								</li>
								<li>
									<span class="fa-li"><i class="fab fa-sketch"></i></span>
									<span class="label">Word</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-th-large"></i></span>
									<span class="label">Powerpoint</span>
								</li>
								<li>
									<span class="fa-li"><i class="fas fa-chart-pie"></i></span>
									<span class="label">Spreadsheet</span>
								</li>
							</ul>
						</article>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			<!-- Experience-->
			<section class="resume-section background" id="experience">
				<div class="resume-section-content content-wrapper">
					<h2 class="mb-5">Experience</h2>
					<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
						<div class="flex-grow-1">
							<h3 class="mb-0">UI Developer</h3>
							<div class="subheading mb-3">Avalon Information Systems Pvt. Ltd.</div>
							<p>Responsible for creating mockups, workflows and development of websites to give a rich
								user
								interface design. Provided all the graphic assets required (icons, banners, gifs, svgs
								etc)
								in a website or application.</p>
						</div>
						<div class="flex-shrink-0"><span class="text-primary">January 2019 - Present</span></div>
					</div>
					<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
						<div class="flex-grow-1">
							<h3 class="mb-0">Graphic Designer</h3>
							<div class="subheading mb-3">Urmad Solutions</div>
							<p>Provided graphics for social channels (Instagram, Facebook & Twitter),
								artwork for banners, large format posters, and also the assets for brand
								promotion including logos, business cards, brochures etc.</p>
						</div>
						<div class="flex-shrink-0"><span class="text-primary">October 2017 - Dec 2018</span></div>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			<!-- Education-->
			<section class="resume-section background" id="education">
				<div class="resume-section-content content-wrapper">
					<h2 class="mb-5">Education</h2>
					<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
						<div class="flex-grow-1">
							<h3 class="mb-0">Guru Gobind Singh Indraprastha University</h3>
							<div class="subheading mb-3">Bachelor of Technology</div>
							<div>Information Technology</div>
							<p>CPI: 67.10</p>
						</div>
						<div class="flex-shrink-0"><span class="text-primary">2013 - 2017</span></div>
					</div>
					<div class="d-flex flex-column flex-md-row justify-content-between">
						<div class="flex-grow-1">
							<h3 class="mb-0">D.A.V. Public School, Pushpanjali Enclave</h3>
							<div class="subheading mb-3">CBSE</div>
							<div>Science, Non Medical</div>
							<p>CGPA: 8.0</p>
						</div>
						<div class="flex-shrink-0"><span class="text-primary">2012</span></div>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			<!-- Interests-->
			<section class="resume-section background" id="interests">
				<div class="resume-section-content content-wrapper">
					<h2 class="mb-5">Interests</h2>
					<p>Apart from being a UI Designer, I enjoy most of my time being outdoors. I like going on trips and
						hanging out with friends.</p>
					<p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and
						television
						shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest
						technology advancements in the front-end web development world.</p>
				</div>
			</section>
		</div>
	</body>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();

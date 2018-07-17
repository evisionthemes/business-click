<?php 
// remove $animate and use .evt-carousel class for carousel
function evt_featured_item($animate) {
	echo '<div class="evt-featured-item-wrap evision-animate '.$animate.'">
				<div class="evt-featured-item">
					<div class="evt-featured-icon">
					  	<i class="fas fa-wrench"></i>
					</div>

					<div class="evt-featured-caption">
						<h2 class="evt-featured-title mb-3 mt-2"><a href="#!">Fully Customizable</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>

						<a href="#!" class="readmore">Read More</a>
					</div>
				</div>
			</div>';
}
?>
<section id="evt-featured" class="text-center">	
	<div class="container">
		<h2 class="widget-title evision-animate slideInDown">Awesome Features</h2>
		
		<!-- .evt-carousel -->
		<div class="evt-featured-slider evt-carousel evision-animate fadeIn">

			<?php //for($i = 0; $i <= 5; $i++) { ?>
				<?php 
				evt_featured_item('fadeInLeft');
				evt_featured_item('fadeInLeft');

				evt_featured_item('fadeInUp');
				evt_featured_item('fadeInUp');

				evt_featured_item('fadeInRight');
				evt_featured_item('fadeInRight');
				?>
			<?php //} ?>
		  

		</div>
	</div>
</section>
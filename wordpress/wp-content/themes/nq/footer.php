<footer>
	<div class="container">
		<div class="columns-3">
			<h5>Articles</h5>
			<ul>
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '" >' .   $recent["post_title"].'</a> </li> ';
					}
				?>
			</ul>
		</div>
		<div class="columns-3">
			<h5>Newsletter</h5>
		</div>
		<div class="columns-3">
			
		</div>
	</div>
	<div class="container">
		<div class="columns-2">
			<p class="small"><b><a href="/contact">Contact</a></b> | &copy; 2013</p>
		</div>
		<div class="columns-2">
			<p class="small">
			</p>
		</div>
	</div>
</footer>
</div> <!--// end wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/js/app.js"></script>
</body>
</html>
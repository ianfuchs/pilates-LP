<?php
/**
	Template Name: Blank Landing Page
*/
?>
<html>
<head>
<link href="http://demi-barpilates.com/development/marketing/landing-style.css" rel="stylesheet" type="text/css">
<title>
	<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>
</title>
	<?php wp_head(); ?>
</head>

<body>
<?php while (have_posts()) : the_post(); ?>
<!-- <div id="container" class="uffes-fullwidth"> -->
<!-- 			<div id="content" role="main"> -->
<!-- 					<div id="page-content"> -->
					<?php the_content(); endwhile; ?>
<!-- 					</div> -->
<!-- 			</div> -->
<!-- </div> -->
</body>
</html>
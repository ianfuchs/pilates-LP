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
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '141930552925307');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=141930552925307&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
<?php function template( $title, $content) { ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
<title><?php echo $title; ?></title>
<?php include 'headers.php'; ?>
</head>
<body style="overflow: hidden; height: 100%;">
		
	<div style="text-align: center">
		<div>
			<center>
				<?php echo $content; ?>
			</center>
		</div>

	</div>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48700721-6', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>

<?php } ?>
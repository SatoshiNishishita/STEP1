<html>
<head>
<meta charset="UTF-8" />
 <title>簡易掲示板</title>
 
 <!--Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--カルーセルスライダーslick-->
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
	$(function(){
		$('.slick').slick({
			dots : true,
			autoplay:true,
			autoplaySpeed:2000,
		});
	});
</script>
<style>
	.hoge {
		width: 100%;
		margin: 0 auto;
	}
	.hoge img {
		margin: 0 auto;
	}
	.slick-prev:before, .slick-next:before {
		color: #0080FF;
	}
</style>
</head>
 
<body>
</body>
</html>
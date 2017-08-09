<?php 
session_start();
require_once 'library/config.php';
require_once 'library/functions.php';
$cityList = getAuctionPropertiesById('x',2,32);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bank Auction Properties</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
<script language="javascript" src="javascript/jquery.min.js"></script>
<script language="javascript" src="javascript/jquery.bxSlider.js"></script>
<script language="javascript" src="javascript/jcarousellite_1.0.1.js"></script>    
<!--[if IE]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<style>
body{ margin-top:10px; background:#ffffff url(images/bg-body.jpg) repeat-x; }
</style>
<script type="text/javascript">
	$(document).ready(function(){
        $(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
	$('div#listBox').hover(
			function(){
				$(this).addClass('mouseHover');
			},
			function(){
				$(this).removeClass('mouseHover');
			}
	);//hover
});
</script>
<style>
</style>
</head>

<body>
<!--menu start-->
<div class="container">
	<div id="header" class="span-24">
		<img src="images/logo.jpg" />
    </div>
    <div class="span-24">
   <div id="underlinemenu">
	<ul>
		
		<li><a href="<?php echo WEB_ROOT; ?>index.html" title="Home">Home</a></li>
		<!--
		<li><a href="<?php echo WEB_ROOT; ?>Search-Auction.html" title="Search Auction">Search Auction</a></li>
		-->
		<li><a href="<?php echo WEB_ROOT; ?>About-Us.php" title="About Us">About Us</a></li>
		
		<li><a href="<?php echo WEB_ROOT; ?>Bank-List.php" title="Bank List">Bank List</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>City-List.html" title="City List">City List</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>Advertise-with-Us.html" title="Advertice with Us">Advertice with Us</a></li>	
		<li><a href="<?php echo WEB_ROOT; ?>Contact-Us.html" title="Contact Us">Contact Us</a></li>
        <?php if(isset($_SESSION['email'])): ?>
             <li><a href="<?php echo WEB_ROOT; ?>logout.php" title="Login">Logout</a></li> 
        <li><a href="#" title="Login"><?php echo $_SESSION['email']; ?></a></li>
        <?php else: ?>
        <li><a href="<?php echo WEB_ROOT; ?>login.php" title="Login">Login</a></li> 
        <li><a href="<?php echo WEB_ROOT; ?>signup.php" title="Login">Signup</a></li>
        <?php endif; ?>
	</ul>
	</div>
</div>
<!--    menu end  -->

   
  <div id="sidebar-1" class="span-5 border">
  	<?php include('left.php');?>
	
    </div>
<div id="content" class="span-13 border">
	<?php include('list.php'); ?>
</div>
<div class="span-6 last">
	<?php include('slider.php'); ?>
<hr/>

<?php include('footer.php'); ?>
</div>
</body>
</html>
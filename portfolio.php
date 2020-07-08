<!DOCTYPE html>
<html lang="en">
	<head>
		<title>NB Web Solution</title>
		<?php  include 'links/link.php'  ?>
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
	</head>
	<body>

<!--  ==========================================================================
#Our Menu Section Start
==========================================================================  -->	
<?php  include 'menu.php' ?>

<!--  ==========================================================================
#Our services Section Start
==========================================================================  -->
<section class="common-padding bg-light">
	<div class="main_heading">
		<h1 class="text-center text-capitalize">Under Construction</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-10 mx-auto">
			</div>
		</div>
	</div>
</section>

<!--  ==========================================================================
#Our services Section Start
==========================================================================  -->

<!--  ==========================================================================
#Our Footer Section Start
==========================================================================  -->

<?php  include 'footer.php' ?>

<!--  ==========================================================================
#Our Footer Section Ends
==========================================================================  -->
<div class="scrolltop float-right">
	<i class="fa fa-arrow-up"  onclick="topFunction()" id="myBtn" > </i>
</div>

<script type="text/javascript">
if ($(window).width() < 992) {
$('#navbar_id').removeClass('w-100');
$('#navbar_id').removeClass('d-flex');
$('#navbar_id').removeClass('align-items-end');
$('#navbar_id').addClass('menu_center');
} else {
$('#navbar_id').addClass('w-100');
$('#navbar_id').removeClass('menu_center');
}

mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>

</body>
</html>
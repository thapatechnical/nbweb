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
<?php
if(isset($_POST['submit'])){
  extract($_POST);
  include 'dbconnection.php';
  
      $insertquery = "insert into contactus( name, phone, email, message) values('$name','$phone','$email', '$message')";
      // echo $insertquery
      $iquery = mysqli_query($db, $insertquery);
			if($iquery){
					?>
						<script>
							alert("Thank for your response..!!");
						</script>
					<?php

          // Email functioning start here
          $message1 = "Contact Person Name: ".$name."\nPhone: ".$phone."\nEmail: ".$email."\nMessage: ".$message;
          $sub = "NBWEB-Contact";
          $boundary = md5("nbweb");
          $headers = "MIME-Version: 1.0\r\n";
          $headers .= "From:info@nbweb.com\r\n";
          $headers .= "Reply-To:info@nbweb.com\r\n";
          $headers .= "Content-Type: multipart/mixed; boundary =". $boundary."\r\n";

          $body = "--$boundary\r\n";
          $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
          $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
          $body .= chunk_split(base64_encode(message1));
          $body .= "--$boundary\r\n";

          $sentMailResult = mail('mail@nbwebsolution.com', $sub, $body, $headers);
          // Email function end here
				}else{
					?>
						<script>
							alert("Please try again ");
						</script>
					<?php
				}
		}	
?>

<!--  ==========================================================================
#Our services Section Start
==========================================================================  -->
<section class="common-padding bg-light">
	<div class="main_heading">
		<h1 class="text-center text-capitalize">Contact Form</h1>
	</div>
	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-10 mx-auto">

	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" class="form-conatiner">
                        <div class="card  rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3 class="my-3"><i class="fa fa-envelope"></i> SEND US A MAIL</h3>
                                    <p class="m-0">How can we assist you? NB WebSolution would be happy to speak to you regarding your queries. You can contact us by mailing on the address on the right, filling the form below or by phone or emails.</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="FullName" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" id="nombre" name="phone" placeholder="phone" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" name="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>

			</div>
		</div>
	</div>
	<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.8088025309457!2d-1.2565608485871753!3d51.754819700303536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sin!4v1594183570114!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
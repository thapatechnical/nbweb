<!DOCTYPE html>
<html lang="en">
	<head>
		<title>NB Web Solution</title>
		<?php  include 'links/link.php'  ?>
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
		

		 <style type="text/css">
        .button {
        display: inline-block;
        padding: 0.5em 1.0em;
        border-radius: 4px;
        background: #ffffff;
        font-family: sans-serif;
        font-size: 16px;
        cursor: pointer;
        border: 1px solid #000000;
        margin: 10px;
        -webkit-transition: background 0.3s;
        -moz-transition: background 0.3s;
        transition: background 0.3s;
        }
        .button:hover {
        background-color: rgba(0,0,0,0.1);
        }
        .button:active,
        .button.is-checked {
        background-color: rgba(0,0,0,0.1);
        outline: none;
        }
        .button-group {
        margin: 20px 0;
        text-align: center;
        }
        .button-group:after {
        content: '';
        display: block;
        clear: both;
        }
        img {
        vertical-align: middle;
        }
        .img-responsive {
        display: block;
        max-width: 100%;
        height: auto;
        }
        .grid article {
        background-color: #FFFFFF;
        display: block;
        float: left;
        margin: 1%;
        width: 23%;
        }
        @media (max-width: 1024px) {
        .grid article {
        width: 31.3%;
        }
        }
        @media (max-width: 767px) {
        .grid article {
        width: 48%;
        }
        }
        @media (max-width: 479px) {
        .grid article {
        margin: 2% 0;
        width: 100%;
        }
        }
        </style>
	</head>
	<body>

<!--  ==========================================================================
#Our Menu Section Start
==========================================================================  -->	
<?php  include 'menu.php' ?>

<!--  ==========================================================================
#Our services Section Start
==========================================================================  -->
<section class="common-padding ">
	<div class="main_heading">
		<h1 class="text-center text-capitalize">Our Portfolio</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-10 mx-auto">
		

<!--  ==========================================================================
#Our Portfolio Section Start
==========================================================================  -->

 <div class="button-group filters-button-group">
            <button class="btn btn-outline-info is-checked" data-filter="*">All</button>
            <button class="btn btn-outline-info mx-2" data-filter=".static">Static Website</button>
            <button class="btn btn-outline-info" data-filter=".dynamic">Dynamic Website</button>
            <button class="btn btn-outline-info mx-2" data-filter=".portfolio">Portfolio Website</button>
        </div>
        <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
            <article class="static  ">
            	<a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p1.png" />
                </a>
            </article>
            <article class="static dynamic">
                <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p2.png" />
                </a>
            </article>
            <article class="">
                <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p3.png" />
                </a>
            </article>
            <article class="static  rock ">
                <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p3.png" />
                </a>
            </article>
            <article class="static ">
               <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p2.png" />
                </a>
            </article>
            <article class="dynamic">
              <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p1.png" />
                </a>
            </article>
            <article class="dynamic">
                <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p1.png" />
                </a>
            </article>
            <article class="">
               <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p1.png" />
                </a>
            </article>
            <article class="lighthouse rock ">
              <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p1.png" />
                </a>
            </article>
            <article class="portfolio">
               <a href="http://kk.nbwebsolution.com/" target="_thapa">
                <img  class="img-fluid portfolio_card " src="images/portfolio/p1.png" />
                </a>
            </article>
        </section>
	</div>
		</div>
	</div>
</section>

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

 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script type="text/javascript">
        $( function() {
        var $grid = $('.grid').isotope({
        itemSelector: 'article'
        });
        // filter buttons
        $('.filters-button-group').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        });
        $('.button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
        });
        });
        });
        // debounce so filtering doesn't happen every millisecond
        function debounce( fn, threshold ) {
        var timeout;
        return function debounced() {
        if ( timeout ) {
        clearTimeout( timeout );
        }
        function delayed() {
        fn();
        timeout = null;
        }
        timeout = setTimeout( delayed, threshold || 100 );
        }
        }
        $(window).bind("load", function() {
        $('#all').click();
        });
        </script>

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
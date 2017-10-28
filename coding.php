<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php include "./includes/headcss.php";?>

	<title>Coding Portfolio - Dylan Almeida</title>
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
	<?php 
	$mainpage = FALSE;
	include "./includes/navbar.php";
	?>
    <!-- Portfolio Grid Section -->
	<header>
        <div class="container-fluid" style="background:url(./img/bkg-audrey.jpg) no-repeat center;background-size:cover;height:400px;padding-bottom:0px;padding-top:0px">
        </div>
    </header>
	
    <section class="parallax" style="background-image:url(./img/bkg-thefield.jpg);padding-bottom:0px;padding-top:0px">
        <div class="container" style="width:100%">
            <div class="row">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1>Coding</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				
			</div>
		</div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Dylan Almeida 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

	<?php include "./includes/footjs.php";?>
</body>

</html>

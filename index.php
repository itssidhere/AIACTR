<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit="no">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/js1.js"></script>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Work+Sans|Federo|Merriweather:300,400" rel="stylesheet">

</head>

<body>
<style>
	@media(min-width:480px){
		.dropdown:hover > .dropdown-menu{
		display:block;
	}

	}
    .box1{
		position: relative;
		width:100vw;
		left: calc(-50vw + 50%);
    }
	.navbar-nav > li > .dropdown-menu {
		background-color: #343A40;
		color:black;
	}


	.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 60%;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}

	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

/*Left*/
	.modal.left.fade .modal-dialog{
		left: -0.5em;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, left 0.3s ease-out;
		        transition: opacity 0.3s linear, left 0.3s ease-out;
	}

	.modal.left.fade.in .modal-dialog{
		left: 0;
	}

/*Right*/
	.modal.right.fade .modal-dialog {
		right: -1em;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}

	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

	.modal-body{
		background-color :#343A40;
	}

	.modal-body ul li a:hover{
		color:white;
	}


	.modal-body ul li a{
		color:#808080;
	}

	#work-sans{
		font-family: 'Work Sans', sans-serif;
	}
	#font-federo{
		font-family: 'Federo', sans-serif;
	}
	#merriweather{
		font-family:"Merriweather Light", serif;
		font-weight:400;
		font-style:normal;
		font-variant:normal;
		text-transform:none;
		text-decoration:none solid rgb(255, 255, 255);
		text-indent:0px;
	}
	.main-menu{
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		background-color:#C3D7A4;
	}
	.gallery{

		background-color:#4E84C4;
		color:white;


	}
	/*main menu starts*/
  .box1{
		height: 110px;
		overflow-x: scroll;
		overflow-y: hidden;
		white-space: nowrap;
	}
	.box1::-webkit-scrollbar {
		display: none;
		}
	.card-b{
		font-family:Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
		width: auto;
		background-color: white;
		display: inline-block;
		height: 90px;
		border-radius: 10px;
		margin-left: 6px;
		margin-top: 8px;
		margin-right: 6px;
		text-align: center;
align-content: center;
		padding-left: 4px;
		padding-right: 4px;
		color: grey;
		box-shadow: 3px 3px 3px 3px; grey;
		  perspective: 1000px;
	}
		.image{

			width: 70px;
			height:90px;
		}


</style>


<body >

	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container-fluid">
		<a class="navbar-brand" ><img src="images/logo.png" height="80" width="80" alt=""></a>

		<button type="button" class="navbar-toggler" data-toggle="modal" data-target="#menu" ><span class="navbar-toggler-icon"></span></button>


		<div class="collapse navbar-collapse" id="firstNav">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item active"><a href="#"class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About AIACTR</a></li>
			<li class="nav-item dropdown"></li>
			<li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programmes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><font color=#DBCECE>Graduate</font></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Post Graduate</font></a>
        </div>
				</li>
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="acaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><font color=#DBCECE>Departments</font></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Syllabus</font></a>
			<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Faculty Profile</font></a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Academic Calender</font></a>
				</div></li>
					<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NIRF
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><font color=#DBCECE>NIRF2017</font></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>NIRF2019</font></a>
        </div>
				</li>
			<li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>

			<li class="nav-item"><a href="#" class="nav-link">Fees</a></li>
			</ul>
		</div>
		</div>
	</nav>

		<div class="modal right fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="menu">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-body">
					<ul class="navbar-nav ml-auto">
			<li class="nav-item active"><a href="#"class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About AIACTR</a></li>
			<li class="nav-item dropdown"></li>
			<li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programmes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><font color=#DBCECE>Graduate</font></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Post Graduate</font></a>
        </div>
				</li>
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="acaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><font color=#DBCECE>Departments</font></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Syllabus</font></a>
			<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Faculty Profile</font></a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>Academic Calender</font></a>
				</div></li>
					<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NIRF
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><font color=#DBCECE>NIRF2017</font></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><font color=#DBCECE>NIRF2019</font></a>
        </div>
				</li>
			<li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>

			<li class="nav-item"><a href="#" class="nav-link">Fees</a></li>
			</ul>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<!-- End of Navbar -->
	<br/>
	<div class="container-fluid">
		<h2 class="text-center" id="merriweather">AMBEDKAR INSTITUTE OF ADVANCED COMMUNICATION TECHNOLIGIES & RESEARCH</h2>
		<h4 class="text-center" id="merriweather">(FORMERLY AMBEDKAR INSTITUTE OF TECHNOLOGY)</h4>

		<img src="images/logo.png" height="100" width ="100" class="mx-auto d-block"><br/></br>
	<div class="main-menu"><h2 class="text-center" id="font-federo" >Main Menu</h2>


	<!--main menu starts-->
	<center>
<div class="box1">

		<div class="card-b"><img src="images/CAMPUS.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/CIRCULAR.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/CITIZEN CHARTER.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/F&S.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/V&M.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/FORMS.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/GC.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/LIBRARY.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/MD.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/ORDER.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/PD.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/OS.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/PUBLICATION.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/SA.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/SCHOLERSHIPS.jpg" class="image" alt="Placeholder image"></div>
		<div class="card-b"><img src="images/FAQ.jpg" class="image" alt="Placeholder image"></div>


		</div>
		</center>
</div>
	<!--main menu ends-->


	<div class="gallery p-2 mt-2">
		<h2 class="text-center" id="font-federo">Gallery</h2>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 my-1"><img class="img-thumbnail" src="images/c.jpg" alt=""></div>
			<div class="col-lg-4 col-md-4 col-sm-12 my-1"><img class="img-thumbnail" src="images/clg1.jpg" alt=""></div>
			<div class="col-lg-4 col-md-4 col-sm-8 my-1"><img class="img-thumbnail" src="images/clg2.jpg" alt=""></div>
		</div>


	</div>

	</div>


</body>

</html>

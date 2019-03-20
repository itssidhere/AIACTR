
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" ><img src="images/logo.png" height="80" width="80" alt=""></a>

<button type="button" class="navbar-toggler" data-toggle="modal" data-target="#menu" ><span class="navbar-toggler-icon"></span></button>


<div class="collapse navbar-collapse" id="firstNav">
    <ul class="navbar-nav ml-auto mr-auto">
    <li class="nav-item active"><a href="index.php"class="nav-link">Home</a></li>
    <li class="nav-item"><a href="societies.php" class="nav-link">AIACTR Societies</a></li>
    <li class="nav-item dropdown"></li>
    <li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
    <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Programmes
</a>
<div class="dropdown-menu dropdown-menu-right dpdn" aria-labelledby="navbarDropdown">
   <center>
      <div class="gp">
      <h3 id="font-federo">Graduate Programmes</h3>
    <h5 id="merriweather">1.&nbsp;B.Tech. CSE(Computer Science and Engineering)</h5>
      <h5 id="merriweather">&#8226;&nbsp;Duration : 4 Years</h5>
      <h5 id="merriweather">&#8226;&nbsp;Intake : 60</h5>
    <hr style="color: grey;"/>
    <h5 id="merriweather">2.&nbsp;B.Tech. ECE(Electronics and Communication Engineering)</h5>
      <h5 id="merriweather">&#8226;&nbsp;Duration : 4 Years</h5>
      <h5 id="merriweather">&#8226;&nbsp;Intake : 120</h5>
    
      <br/>
     
      <h3 id="font-federo">Post Graduate Programmes</h3>
         <h4 id="merriweather" style="color:black">Computer Science Department</h4>
    <h5 id="merriweather" style="color:black">1.&nbsp;M.Tech.[Information Security]</h5>
      <h5 id="merriweather" style="color:black">&#8226;&nbsp;Duration : 2 Years</h5>
      <h5 id="merriweather" style="color:black">&#8226;&nbsp;Intake : 18</h5>
    <hr style="color: grey;"/>
         <h4 id="merriweather" style="color:black">Electronics Department</h4>
    <h5 id="merriweather" style="color:black">1.&nbsp;M.Tech.[Digital Communication]</h5>
      <h5 id="merriweather" style="color:black">&#8226;&nbsp;Duration : 2 Years</h5>
      <h5 id="merriweather" style="color:black">&#8226;&nbsp;Intake : 18</h5>
         <br/>
         <h4 id="merriweather" style="color:black">2.&nbsp;B.Tech.[Radio Frequency]</h4>
      <h5 id="merriweather" style="color:black">&#8226;&nbsp;Duration : 2 Years</h5>
      <h5 id="merriweather" style="color:black">&#8226;&nbsp;Intake : 18</h5>
        
            </div>		
    
    </center>
</div>
        </li>
    <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="acaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Academics
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="#"><h5 id="merriweather">Departments</h5></a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#"><h5 id="merriweather">Syllabus</h5></a>
    <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#"><h5 id="merriweather">Faculty Profile</h5></a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#"><h5 id="merriweather">Academic Calender</h5></a>
        </div></li>
            <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  NIRF
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="#"><h5 id="merriweather">NIRF2017</h5></a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#"><h5 id="merriweather">NIRF2019</h5></a>
</div>
        </li>
    <li class="nav-item"><a href="#" class="nav-link">Voting</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>

<li class="nav-item dropleft dropdown">
<a class="nav-link " href="#" id="proDropdown" style="outline: none;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 Login/Signup
</a>
<div class="dropdown-menu dropdown-menu-right  snp"  aria-labelledby="navbarDropdown">
   <form action="includes/login.inc.php" method="POST" id="main">
          <div class="form-group" id="main">
     <input  type="text" name="user" class="form-control" placeholder="enrollment-no." required>
  <input  type="password" name="pwd" class="form-control" placeholder="Password" required>
                      <button type="submit" name="submit" class="btn btn-default">login</button>

</div>
  </form>
</div>
        </li>			</ul>
</div>
</div>
</nav>

<div class="modal right fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="menu">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-body">
            <ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="#"class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">AIACTR Societies</a></li>
    <li class="nav-item dropdown"></li>
    <li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
    <li class="nav-item dropdown">
<a class="nav-link " href="#" id="proDropdown" role="button" data-toggle="modal" data-target="#programmes" aria-haspopup="true" aria-expanded="false">
  Programmes
</a>

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
    <li class="nav-item"><a href="#" class="nav-link">Voting</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>

    <li class="nav-item">  <a class="nav-link " href="#"  role="button" data-toggle="modal" data-target="#login" aria-haspopup="true" aria-expanded="false">
  Login/Signup
</a></li>
    </ul>
        </div>

    </div><!-- modal-content -->
</div><!-- modal-dialog -->
</div><!-- modal -->
<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>
<!-- End of Navbar -->
<div class="modal fade" id="programmes" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      
        <div class="modal-body mdl">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			<br/>
			<br/>
 <center>
			  <div class="gp">
			  <h3 id="font-federo">Graduate Programmes</h3>
			<h5 id="merriweather">1.&nbsp;B.Tech. CSE(Computer Science and Engineering)</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Duration : 4 Years</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Intake : 60</h5>
			<hr style="color: grey;"/>
			<h5 id="merriweather">2.&nbsp;B.Tech. ECE(Electronics and Communication Engineering)</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Duration : 4 Years</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Intake : 120</h5>
			  </div>
			  <br/>
			 <div class="gp">
			  <h3 id="font-federo">Post Graduate Programmes</h3>
				 <h5 id="merriweather">Computer Science Department</h5>
			<h5 id="merriweather">1.&nbsp;M.Tech.[Information Security]</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Duration : 2 Years</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Intake : 18</h5>
			<hr style="color: grey;"/>
				 <h5 id="merriweather">Electronics Department</h5>
			<h5 id="merriweather">1.&nbsp;M.Tech.[Digital Communication]</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Duration : 2 Years</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Intake : 18</h5>
				 <br/>
				 <h5 id="merriweather">2.&nbsp;B.Tech.[Radio Frequency]</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Duration : 2 Years</h5>
			  <h5 id="merriweather">&#8226;&nbsp;Intake : 18</h5>
			  </div>
			  			

			
			</center>
      
        </div>
        
      </div>
      
    </div>
  </div>
	
	<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body mdl">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
<br/>
<br/>
			<center><h4 style="color: grey;">Login</h4></center>
			<br/>
         <form action="includes/login.inc.php" method="POST" >
				  <div class="form-group" style="width: 80%;">
			 <input style="margin-bottom: 10px;" type="text" name="user" class="form-control" placeholder="enrollment no." required>
          <input style="" type="password" name="pwd" class="form-control" placeholder="Password" required>
        </div>
        <button style="background-color: #C3D7A4;" type="submit" name="submit" class="btn btn-default">login</button>
		  </form>
        </div>
        
      </div>
      
    </div>
  </div>
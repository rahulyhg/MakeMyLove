<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php isloggedin(); ?>
<?php
$id=$_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$dob=$day ."-".$month."-" ."$year" ;
	processprofile_form($id,$dob);
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Create Your Profile</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="lname" size="60" maxlength="128" class="form-text required">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex">
	                    <option value="">Male</option>
	                    <option value="">Female</option> 
	               
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="day">
		                    <option value="">Date</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                    </select>
	                  </div>
	            </div>
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="month">
		                    <option value="">Month</option>
		                    <option value="">January</option>
		                    <option value="">February</option>
		                    <option value="">March</option>
		                    <option value="">April</option>
		                    <option value="">May</option>
		                    <option value="">June</option>
		                    <option value="">July</option>
		                    <option value="">August</option>
		                    <option value="">September</option>
		                    <option value="">October</option>
		                    <option value="">November</option>
		                    <option value="">December</option>
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="year">
		                    <option value="">Year</option>
		                    <option value="">1980</option>
		                    <option value="">1981</option>
		                    <option value="">1982</option>
		                    <option value="">1983</option>
		                    <option value="">1984</option>
		                    <option value="">1985</option>
		                    <option value="">1986</option>
		                    <option value="">1987</option>
		                    <option value="">1988</option>
		                    <option value="">1989</option>
		                    <option value="">1990</option>
		                    <option value="">1991</option>
		                    <option value="">1992</option>
		                    <option value="">1993</option>
		                    <option value="">1994</option>
		                    <option value="">1995</option>
		                    <option value="">1996</option>
		                    <option value="">1997</option>
		                    <option value="">1998</option>
		                    <option value="">1999</option>
		                    <option value="">2000</option>
		                    <option value="">2001</option>
		                    <option value="">2002</option>
		                    <option value="">2003</option>
		                    <option value="">2004</option>
		                    <option value="">2005</option>
		                    <option value="">2006</option>
		                    <option value="">2007</option>
		                    <option value="">2008</option>
		                    <option value="">2009</option>
		                    <option value="">2010</option>
		                    <option value="">2011</option>
		                    <option value="">2012</option>
		                    <option value="">2013</option>
		                    <option value="">2014</option>
		                    <option value="">2015</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="religion">
		                    <option value="Not Applicable">Not Applicable</option>
		                    <option value="Hindu">Hindu</option>
		                    <option value="Christian">Christian</option>
		                    <option value="Muslim">Muslim</option>
		                    <option value="Jain">Jain</option>
		                    <option value="Sikh">Sikh</option>
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="caste">
		                    <option value="Roman Cathaolic">Roman Cathaolic</option>
		                    <option value="Latin Catholic">Latin Catholic</option>
		                    <option value="Penthecost">Penthecost</option>
		                    <option value="Mappila">Mappila</option>
		                    <option value="Thiyya">Thiyya</option>  
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="subcaste">
		                    <option value="">Not Applicable</option>
		                    <option value="">sub cast1</option>
		                    <option value="">sub caste2</option>
		                  
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="country">
		                    <option value="Not Applicable">Country</option>
		                    <option value="Hindu">India</option>
		                    <option value="Christian">China</option>
		                    <option value="Muslim">UAE</option>
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="state">
		                    <option value="">State</option>
		                    <option value="Latin Catholic">KErala</option>
		                    <option value="Penthecost">Tamilnadu</option>
		                    <option value="Mappila">Karnataka</option>
		                    <option value="Thiyya">Andra</option>  
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="District">
		                    <option value="">District</option>
		                     <option value="">Trivandrum</option>
		                    <option value="">Kollam</option>
		                    <option value="">Pathanamthitta</option>
		                  
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="age">
	                     <option value="">Date</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                </select>
			    </div>
		    </div>
             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="MArital Status">
	                    <option value="">Single</option>
	                    <option value="">Married</option> 
	               
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="Marital Status">
	                    <option value="">Self</option>
	                    <option value="">Son/Daughter</option> 
	               		<option value="">Other</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="Education">
	                    <option value="">Primary</option>
	                    <option value="">Tenth level</option> 
	               		<option value="">+2</option> 
	               		<option value="">Degree</option> 
	               		<option value="">PG</option> 
	               		<option value="">Doctorate</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="body-type">
	                    <option value="">Slim</option>
	                    <option value="">Fat</option> 
	               		<option value="">Average</option> 
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="body-type">
	                    <option value="">No Problem</option>
	                    <option value="">Blind</option> 
	               		<option value="">Deaf</option> 
	                </select>
			    </div>
		    </div>
            <!-- Fifth Row ends -->
            <!-- sixth Row starts-->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="drink">
	                    <option value="">No</option>
	                    <option value="">Yes</option> 
	               		<option value="">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke">
	                    <option value="">No</option>
	                    <option value="">Yes</option> 
	               		<option value="">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke">
	                    <option value="">No</option>
	                    <option value="">Yes</option> 
	               		<option value="">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mother-tounge">
	                    <option value="">Malayalam</option>
	                    <option value="">Hindi</option> 
	               		<option value="">English</option> 
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mother-tounge">
	                    <option value="">Malayalam</option>
	                    <option value="">Hindi</option> 
	               		<option value="">English</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="blood-group">
	                    <option value="">O +ve</option>
	                    <option value="">O -ve</option> 
	               		<option value="">AB -ve</option> 
	                </select>
			    </div>
		    </div>
		    <!-- sixth Row ends-->
		    <!-- Seventh Row starts-->
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   	<div class="form-group col-sm-2">
		      <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour">
	                    <option value="">Black</option>
	                    <option value="">Fair</option> 
	               		<option value="">Normal</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="Diet">
	                    <option value="">Veg</option>
	                    <option value="">Non Veg</option> 
	               		
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Occupa Descr <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>

             <!-- Seventh Row ends-->
             </div>
             <div class="col-sm-12 login_left">
           <!-- eighth Row starts-->
           <div class="form-group col-sm-2">
		    <label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		   </div>
		   <div class="form-group col-sm-2">
		      <label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bros">
	                    <option value="">1</option>
	                    <option value="">2</option> 
	                    <option value="">3</option> 
	                    <option value="">4</option> 
	                    <option value="">5</option> 	
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sis">
	                    <option value="">1</option>
	                    <option value="">2</option> 
	                    <option value="">3</option> 
	                    <option value="">4</option> 
	                    <option value="">5</option> 	
	                </select>
			    </div>
		    </div>
             <!-- eighth Row ends-->
         <hr/>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
      </div>
</div>
</body>
</html>	
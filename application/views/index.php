<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test MIS LPKIA</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
    <style type="text/css">
	#jrs{ font-size: 19px; }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="panel panel-default">	    
	    <div class="panel-body">
		    <div class="page-header">
			  <p align='center'> <b>Apply as a Employee</b></p>
			</div>			
			<div class="row">
		    <div class="col-lg-4">
			<form class="form-horizontal" action="<?php echo site_url('mahasiswa/simpan_data'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">		
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="f_name" name="F_name" placeholder="First Name *">
					</div>
				</div>

				<div class="form-group">		
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="l_name" name="L_name" placeholder="Last Name *">
					</div>
				</div>

				<div class="form-group">		
					<div class="col-sm-10">
					  <input type="password" class="form-control" id="password" name="password" placeholder="Password *">
					</div>
				</div>
				<div class="form-group">		
					<div class="col-sm-10">
					  <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm Password *">
					</div>			
				
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="radioGender" id="radioMale" value="Male">
					<label class="form-check-label" for="radioMale">
					Male
					</label>				
			</div>
			<div class="form-check">				
				<input class="form-check-input" type="radio" name="radioGender" id="radioFemale" value="Female">
					<label class="form-check-label" for="radioFemale">
					Female
					</label>
			</div>
		
			</div>
			
			</div>
			
			<div class="col-lg-8">
			<div class="form-group">		
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email *">
					</div>
				</div>
			<div class="form-group">		
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="email" name="phone" placeholder="Your Phone *">
					</div>
				</div>
				<div class="form-group">
					
					<div id="jrs" class="col-sm-10">
					    <select class="form-control" id="jurusan" name="jurusan">
							<option value="-">Please Select Your Security Question ? *</option>
							<option value="Manajemen Informatika">Siapa nama ibu mu ?</option>
						    <option value="Teknik Komputer">Apa merk handphone mu ?</option>
							<option value="Komputer Akuntansi">Dimana tempat tinggal mu ?</option>
					    </select> 
					</div>
					<div class="form-group">		
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter Your Answer *">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success" align="right">Register</button>
					</div>
				</div>
					</form>
				</div>
			</div>
			
			</div>
	    </div>
		
	</div>
  
	<script src="<?php echo base_url('style/js/jquery-3.1.1.js');?>"></script>
	<script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
  </body>
</html>

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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
  	<div class="panel-body">
  		<div class="page-header">
			  <p align='center'> <b>Apply as a Employee</b></p>
			</div>
      <form  action="<?php echo site_url('employee/simpan_data'); ?>" method="post" enctype="multipart/form-data">
        <div class="row">     
      <div class="col-md-6" style="">
            <div class="form-group" style="position: static;">              
                <input type="text" class="form-control" id="f_name" name="F_name" placeholder="First Name *" required="required" >           
            </div>
            <div class="form-group" style="position: static;">
                <input type="text" class="form-control" id="l_name" name="L_name" placeholder="Last Name *" required="required">        
            </div>
            <div class="form-group" style="position: static;">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password *" required="required"  minlength="8">
            </div>
            <div class="form-group" style="position: static;">
                <input type="password" class="form-control" id="c_password" placeholder="Confirm Password *" required="required" minlength="8">
            </div>
            <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required="required">
            <label class="form-check-label" for="inlineRadio1">Male</label>
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>        
    </div>
      <div class="col-md-6" style="">
            <div class="form-group" style="position: static;">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email *" required="required">
            </div>
          <div class="form-group" style="position: static;">
              <input type="number" class="form-control"  id="phone" name="phone" placeholder="Your Phone *"required="required">
        </div>
            <div class="form-group" style="position: static;">
                <select class="form-control" id="opsi_security">
                  <option value="-">Please Select Your Security Question ? *</option>
                  <option value="Manajemen Informatika">Siapa nama ibu mu ?</option>
                  <option value="Teknik Komputer">Apa merk handphone mu ?</option>
                  <option value="Komputer Akuntansi">Dimana tempat tinggal mu ?</option>
                </select>
            </div>
            <div class="form-group" style="position: static;">
                <input type="text" class="form-control" id="answer"  name="answer"placeholder="Your Answer ? *" required="required">
            </div>
          <button type="submit" class="btn btn-primary">Register</button>
    </div>
</div>
      </form>
		
  </div>
	<script src="<?php echo base_url('style/js/jquery-3.1.1.js');?>"></script>
	<script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
  </body>
</html>

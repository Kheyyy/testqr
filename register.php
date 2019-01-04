<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  
		include_once 'script.php';
	?>
</head>
<body>
	<div class="container">
		<br><h1>Register</h1>
		<hr>
	<form enctype="multipart/form-data" method="post" action="db.php" >
		<div class="form-group row">
	    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="name" placeholder="username" name="username" required>
	    </div>
	  </div>


	  <fieldset class="form-group">
	    <div class="row">
	      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
	      <div class="col-sm-10">
	        <div class="form-check">
	          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
	          <label class="form-check-label" for="gridRadios1">
	            Male
	          </label>
	        </div>
	        <div class="form-check">
	          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
	          <label class="form-check-label" for="gridRadios2">
	            Female
	          </label>
	        </div>
	      </div>
	    </div>
	  </fieldset>

	  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">School</label>
    <div class="col-sm-10">
    <select class="form-control" id="exampleFormControlSelect1" name="school" required>
      <option>CS</option>
      <option>EC</option>
      <option>TN</option>
     
    </select>
    </div>
  </div>

	  <div class="form-group row">
	    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
	    </div>
	  </div>

	  
	  

	  
  		
	  
	  <div class="form-group row">
	    <div class="col-sm-2">
	      <button type="submit" class="btn btn-primary float-right" >Register</button>
	    </div>
	  </div>

	</form>
</div>

</body>
</html>